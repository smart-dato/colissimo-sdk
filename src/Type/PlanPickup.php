<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PlanPickup implements RequestInterface
{
    private ?PlanPickupRequest $planPickupRequest = null;

    /**
     * Constructor
     */
    public function __construct(?PlanPickupRequest $planPickupRequest)
    {
        $this->planPickupRequest = $planPickupRequest;
    }

    public function getPlanPickupRequest(): ?PlanPickupRequest
    {
        return $this->planPickupRequest;
    }

    public function withPlanPickupRequest(?PlanPickupRequest $planPickupRequest): static
    {
        $new = clone $this;
        $new->planPickupRequest = $planPickupRequest;

        return $new;
    }
}
