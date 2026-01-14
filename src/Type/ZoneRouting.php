<?php

namespace SmartDato\ColissimoSdk\Type;

class ZoneRouting
{
    private ?\SmartDato\ColissimoSdk\Type\ZoneCABRoutage $zoneCABRoutage = null;

    private ?\SmartDato\ColissimoSdk\Type\ZoneInfosRoutage $zoneInfosRoutage = null;

    public function getZoneCABRoutage(): ?\SmartDato\ColissimoSdk\Type\ZoneCABRoutage
    {
        return $this->zoneCABRoutage;
    }

    public function withZoneCABRoutage(?\SmartDato\ColissimoSdk\Type\ZoneCABRoutage $zoneCABRoutage): static
    {
        $new = clone $this;
        $new->zoneCABRoutage = $zoneCABRoutage;

        return $new;
    }

    public function getZoneInfosRoutage(): ?\SmartDato\ColissimoSdk\Type\ZoneInfosRoutage
    {
        return $this->zoneInfosRoutage;
    }

    public function withZoneInfosRoutage(?\SmartDato\ColissimoSdk\Type\ZoneInfosRoutage $zoneInfosRoutage): static
    {
        $new = clone $this;
        $new->zoneInfosRoutage = $zoneInfosRoutage;

        return $new;
    }
}
