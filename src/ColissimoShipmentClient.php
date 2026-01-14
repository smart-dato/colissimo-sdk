<?php

namespace SmartDato\ColissimoSdk;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ColissimoShipmentClient
{
    private \Phpro\SoapClient\Caller\Caller $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & Type\GetLabel  $parameters
     * @return ResultInterface & Type\GetLabelResponse
     *
     * @throws SoapException
     */
    public function getLabel(\SmartDato\ColissimoSdk\Type\GetLabel $parameters): \SmartDato\ColissimoSdk\Type\GetLabelResponse
    {
        $response = ($this->caller)('getLabel', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GetLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateBordereauByParcelsNumbers  $parameters
     * @return ResultInterface & Type\GenerateBordereauByParcelsNumbersResponse
     *
     * @throws SoapException
     */
    public function generateBordereauByParcelsNumbers(\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbers $parameters): \SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersResponse
    {
        $response = ($this->caller)('generateBordereauByParcelsNumbers', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateTokenService  $parameters
     * @return ResultInterface & Type\GenerateTokenServiceResponse
     *
     * @throws SoapException
     */
    public function generateTokenService(\SmartDato\ColissimoSdk\Type\GenerateTokenService $parameters): \SmartDato\ColissimoSdk\Type\GenerateTokenServiceResponse
    {
        $response = ($this->caller)('generateTokenService', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateTokenServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetProductInterService  $parameters
     * @return ResultInterface & Type\GetProductInterServiceResponse
     *
     * @throws SoapException
     */
    public function getProductInterService(\SmartDato\ColissimoSdk\Type\GetProductInterService $parameters): \SmartDato\ColissimoSdk\Type\GetProductInterServiceResponse
    {
        $response = ($this->caller)('getProductInterService', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GetProductInterServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateCN23  $parameters
     * @return ResultInterface & Type\GenerateCN23Response
     *
     * @throws SoapException
     */
    public function generateCN23(\SmartDato\ColissimoSdk\Type\GenerateCN23 $parameters): \SmartDato\ColissimoSdk\Type\GenerateCN23Response
    {
        $response = ($this->caller)('generateCN23', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateCN23Response::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetBordereauByNumber  $parameters
     * @return ResultInterface & Type\GetBordereauByNumberResponse
     *
     * @throws SoapException
     */
    public function getBordereauByNumber(\SmartDato\ColissimoSdk\Type\GetBordereauByNumber $parameters): \SmartDato\ColissimoSdk\Type\GetBordereauByNumberResponse
    {
        $response = ($this->caller)('getBordereauByNumber', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GetBordereauByNumberResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetListMailBoxPickingDates  $parameters
     * @return ResultInterface & Type\GetListMailBoxPickingDatesResponse
     *
     * @throws SoapException
     */
    public function getListMailBoxPickingDates(\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDates $parameters): \SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesResponse
    {
        $response = ($this->caller)('getListMailBoxPickingDates', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateLabelService  $parameters
     * @return ResultInterface & Type\GenerateLabelServiceResponse
     *
     * @throws SoapException
     */
    public function generateLabelService(\SmartDato\ColissimoSdk\Type\GenerateLabelService $parameters): \SmartDato\ColissimoSdk\Type\GenerateLabelServiceResponse
    {
        $response = ($this->caller)('generateLabelService', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateLabelServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateCN23Service  $parameters
     * @return ResultInterface & Type\GenerateCN23ServiceResponse
     *
     * @throws SoapException
     */
    public function generateCN23Service(\SmartDato\ColissimoSdk\Type\GenerateCN23Service $parameters): \SmartDato\ColissimoSdk\Type\GenerateCN23ServiceResponse
    {
        $response = ($this->caller)('generateCN23Service', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateCN23ServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateLabel  $parameters
     * @return ResultInterface & Type\GenerateLabelResponse
     *
     * @throws SoapException
     */
    public function generateLabel(\SmartDato\ColissimoSdk\Type\GenerateLabel $parameters): \SmartDato\ColissimoSdk\Type\GenerateLabelResponse
    {
        $response = ($this->caller)('generateLabel', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\PlanPickup  $parameters
     * @return ResultInterface & Type\PlanPickupResponse
     *
     * @throws SoapException
     */
    public function planPickup(\SmartDato\ColissimoSdk\Type\PlanPickup $parameters): \SmartDato\ColissimoSdk\Type\PlanPickupResponse
    {
        $response = ($this->caller)('planPickup', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\PlanPickupResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateBordereauByParcelsNumbersService  $parameters
     * @return ResultInterface & Type\GenerateBordereauByParcelsNumbersServiceResponse
     *
     * @throws SoapException
     */
    public function generateBordereauByParcelsNumbersService(\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersService $parameters): \SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceResponse
    {
        $response = ($this->caller)('generateBordereauByParcelsNumbersService', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GenerateToken  $parameters
     * @return ResultInterface & Type\GenerateTokenResponse
     *
     * @throws SoapException
     */
    public function generateToken(\SmartDato\ColissimoSdk\Type\GenerateToken $parameters): \SmartDato\ColissimoSdk\Type\GenerateTokenResponse
    {
        $response = ($this->caller)('generateToken', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GenerateTokenResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CheckGenerateLabel  $parameters
     * @return ResultInterface & Type\CheckGenerateLabelResponse
     *
     * @throws SoapException
     */
    public function checkGenerateLabel(\SmartDato\ColissimoSdk\Type\CheckGenerateLabel $parameters): \SmartDato\ColissimoSdk\Type\CheckGenerateLabelResponse
    {
        $response = ($this->caller)('checkGenerateLabel', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\CheckGenerateLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetListMailBoxPickingDatesService  $parameters
     * @return ResultInterface & Type\GetListMailBoxPickingDatesServiceResponse
     *
     * @throws SoapException
     */
    public function getListMailBoxPickingDatesService(\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesService $parameters): \SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesServiceResponse
    {
        $response = ($this->caller)('getListMailBoxPickingDatesService', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetProductInter  $parameters
     * @return ResultInterface & Type\GetProductInterResponse
     *
     * @throws SoapException
     */
    public function getProductInter(\SmartDato\ColissimoSdk\Type\GetProductInter $parameters): \SmartDato\ColissimoSdk\Type\GetProductInterResponse
    {
        $response = ($this->caller)('getProductInter', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\GetProductInterResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}
