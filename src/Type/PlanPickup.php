<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PlanPickup implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\PlanPickupRequest $planPickupRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\PlanPickupRequest $planPickupRequest)
    {
        $this->planPickupRequest = $planPickupRequest;
    }

    public function getPlanPickupRequest(): ?\SmartDato\ColissimoSdk\Type\PlanPickupRequest
    {
        return $this->planPickupRequest;
    }

    public function withPlanPickupRequest(?\SmartDato\ColissimoSdk\Type\PlanPickupRequest $planPickupRequest): static
    {
        $new = clone $this;
        $new->planPickupRequest = $planPickupRequest;

        return $new;
    }
}
