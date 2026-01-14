<?php

namespace SmartDato\ColissimoSdk;

use Soap\Encoding\ClassMap\ClassMap;
use Soap\Encoding\ClassMap\ClassMapCollection;

class ColissimoTrackingClassmap
{
    public static function types(): \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('http://chargeur.tracking.geopost.com/', 'track', Type\Track::class),
            new ClassMap('http://chargeur.tracking.geopost.com/', 'trackResponse', Type\TrackResponse::class),
            new ClassMap('http://chargeur.tracking.geopost.com/', 'skybillInformationResult', Type\SkybillInformationResult::class),
        );
    }

    public static function enums(): \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection;
    }
}
