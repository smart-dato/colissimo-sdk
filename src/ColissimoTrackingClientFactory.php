<?php

namespace SmartDato\ColissimoSdk;

use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Symfony\Component\EventDispatcher\EventDispatcher;

class ColissimoTrackingClientFactory
{
    /**
     * This factory can be used as a starting point to create your own specialized
     * factory. Feel free to modify.
     *
     * @param  non-empty-string  $wsdl
     */
    public static function factory(string $wsdl): ColissimoTrackingClient
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(ColissimoTrackingClassmap::types())
                        ->addBackedEnumClassMapCollection(ColissimoTrackingClassmap::enums())
                )
            // If you want to enable WSDL caching:
            // ->withCache()
            // If you want to use Alternate HTTP settings:
            // ->withWsdlLoader()
            // ->withTransport()
            // If you want specific SOAP setting:
            // ->withWsdlParserContext()
            // ->withWsdlServiceSelectionCriteria()
        );

        $eventDispatcher = new EventDispatcher;
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ColissimoTrackingClient($caller);
    }
}
