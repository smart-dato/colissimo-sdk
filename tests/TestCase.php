<?php

namespace SmartDato\ColissimoSdk\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use SmartDato\ColissimoSdk\ColissimoServiceProvider;
use VCR\VCR;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'SmartDato\\ColissimoSdk\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ColissimoServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('collisimo-sdk.wsdl.shipment', 'http://172.26.0.1:18098/mockColissimoServiceWSServiceSoapBinding/mockColissimoServiceWSServiceSoapBinding?WSDL&interface=SlsServiceWS/2.0SoapBinding&part=2.wsdl');
        config()->set('collisimo-sdk.wsdl.tracking', 'http://172.26.0.1:18098/mockColissimoServiceWSServiceSoapBinding/mockColissimoServiceWSServiceSoapBinding?WSDL&interface=TrackingServiceWSServiceSoapBinding&part=TrackingServiceWS.wsdl');
        config()->set('collisimo-sdk.auth.contract', '321');
        config()->set('collisimo-sdk.auth.password', 'str0ngp455w0rd');

        VCR::configure()->setCassettePath('tests/fixtures')
            ->setStorage('json')
            ->setMode(VCR::MODE_ONCE)
            ->enableLibraryHooks(['soap', 'curl']);

        /*
         foreach (\Illuminate\Support\Facades\File::allFiles(__DIR__ . '/../database/migrations') as $migration) {
            (include $migration->getRealPath())->up();
         }
         */
    }
}
