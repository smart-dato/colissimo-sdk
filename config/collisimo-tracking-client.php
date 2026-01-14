<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        EngineOptions::defaults('https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl')
    ))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('SmartDato\CollisimoSdk\Type')
    ->setClientDestination('src')
    ->setClientName('CollisimoTrackingClient')
    ->setClientNamespace('SmartDato\CollisimoSdk')
    ->setClassMapDestination('src')
    ->setClassMapName('CollisimoTrackingClassmap')
    ->setClassMapNamespace('SmartDato\CollisimoSdk')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions)))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions)),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler)
        )
    )
    ->addRule(
        new Rules\IsAbstractTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\AbstractClassAssembler)
        )
    );
