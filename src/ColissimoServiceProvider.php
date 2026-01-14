<?php

namespace SmartDato\ColissimoSdk;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Psr\Cache\CacheItemPoolInterface;
use Soap\CachedEngine\CacheConfig;
use Soap\Encoding\EncoderRegistry;
use Soap\Psr18AttachmentsMiddleware\Middleware\AttachmentsMiddleware;
use Soap\Psr18AttachmentsMiddleware\Multipart\AttachmentType;
use Soap\Psr18AttachmentsMiddleware\Storage\AttachmentStorage;
use Soap\Psr18Transport\Psr18Transport;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\EventDispatcher\EventDispatcher;

class ColissimoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('collisimo-sdk')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        // devnote: You should store this attachment storage in a central place in your application.
        // It is used to store the attachments that are being sent and received.
        $this->app->singleton(
            AttachmentStorage::class,
            fn (): AttachmentStorage => new AttachmentStorage,
        );
        $this->app->singleton(
            ColissimoShipmentClient::class,
            function (\Illuminate\Contracts\Foundation\Application $app, array $parameters): ColissimoShipmentClient {
                $config = $app['config']['collisimo-sdk'];
                $engineOptions = EngineOptions::defaults($config['wsdl']['shipment'])
                    ->withEncoderRegistry(
                        EncoderRegistry::default()
                            ->addClassMapCollection(ColissimoShipmentClassmap::types())
                            ->addBackedEnumClassMapCollection(ColissimoShipmentClassmap::enums())
                    );

                $clientInterface = Psr18ClientDiscovery::find();
                $attachmentStorage = $app->make(AttachmentStorage::class);
                $pluginClient = new PluginClient(
                    client: $clientInterface,
                    plugins: [
                        new AttachmentsMiddleware(
                            storage: $attachmentStorage,
                            transportType: AttachmentType::Swa,
                        ),
                    ]
                );
                $engineOptions = $engineOptions->withTransport(
                    transport: Psr18Transport::createForClient($pluginClient)
                );
                if ($config['cache']['enabled']) {
                    $engineOptions = $engineOptions->withCache(
                        cache: $app->make(CacheItemPoolInterface::class),
                        config: new CacheConfig(cacheKey: $config['cache']['cacheKey'], ttlInSeconds: $config['cache']['ttlInSeconds'])
                    );
                }
                $engine = DefaultEngineFactory::create($engineOptions);
                $eventDispatcher = $app->make(EventDispatcher::class);
                $engineCaller = $app->make(EngineCaller::class, ['engine' => $engine]);
                $caller = new EventDispatchingCaller($engineCaller, $eventDispatcher);

                return new ColissimoShipmentClient($caller);
            }
        );

        $this->app->singleton(
            ColissimoTrackingClient::class,
            function (\Illuminate\Contracts\Foundation\Application $app, array $parameters): ColissimoTrackingClient {
                $config = $app['config']['collisimo-sdk'];
                $engineOptions = EngineOptions::defaults($config['wsdl']['tracking'])
                    ->withEncoderRegistry(
                        EncoderRegistry::default()
                            ->addClassMapCollection(ColissimoTrackingClassmap::types())
                            ->addBackedEnumClassMapCollection(ColissimoTrackingClassmap::enums())
                    );

                if ($config['cache']['enabled']) {
                    $engineOptions = $engineOptions->withCache(
                        cache: $app->make(CacheItemPoolInterface::class),
                        config: new CacheConfig(cacheKey: $config['cache']['cacheKey'], ttlInSeconds: $config['cache']['ttlInSeconds'])
                    );
                }
                $engine = DefaultEngineFactory::create($engineOptions);
                $eventDispatcher = $app->make(EventDispatcher::class);
                $engineCaller = $app->make(EngineCaller::class, ['engine' => $engine]);
                $caller = new EventDispatchingCaller($engineCaller, $eventDispatcher);

                return new ColissimoTrackingClient($caller);
            }
        );
    }
}
