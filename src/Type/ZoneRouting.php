<?php

namespace SmartDato\ColissimoSdk\Type;

class ZoneRouting
{
    private ?ZoneCABRoutage $zoneCABRoutage = null;

    private ?ZoneInfosRoutage $zoneInfosRoutage = null;

    public function getZoneCABRoutage(): ?ZoneCABRoutage
    {
        return $this->zoneCABRoutage;
    }

    public function withZoneCABRoutage(?ZoneCABRoutage $zoneCABRoutage): static
    {
        $new = clone $this;
        $new->zoneCABRoutage = $zoneCABRoutage;

        return $new;
    }

    public function getZoneInfosRoutage(): ?ZoneInfosRoutage
    {
        return $this->zoneInfosRoutage;
    }

    public function withZoneInfosRoutage(?ZoneInfosRoutage $zoneInfosRoutage): static
    {
        $new = clone $this;
        $new->zoneInfosRoutage = $zoneInfosRoutage;

        return $new;
    }
}
