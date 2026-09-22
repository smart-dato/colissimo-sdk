<?php

namespace SmartDato\ColissimoSdk;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SmartDato\ColissimoSdk\Type\CheckGenerateLabel;
use SmartDato\ColissimoSdk\Type\CheckGenerateLabelResponse;
use SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbers;
use SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersResponse;
use SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersService;
use SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceResponse;
use SmartDato\ColissimoSdk\Type\GenerateCN23;
use SmartDato\ColissimoSdk\Type\GenerateCN23Response;
use SmartDato\ColissimoSdk\Type\GenerateCN23Service;
use SmartDato\ColissimoSdk\Type\GenerateCN23ServiceResponse;
use SmartDato\ColissimoSdk\Type\GenerateLabel;
use SmartDato\ColissimoSdk\Type\GenerateLabelResponse;
use SmartDato\ColissimoSdk\Type\GenerateLabelService;
use SmartDato\ColissimoSdk\Type\GenerateLabelServiceResponse;
use SmartDato\ColissimoSdk\Type\GenerateToken;
use SmartDato\ColissimoSdk\Type\GenerateTokenResponse;
use SmartDato\ColissimoSdk\Type\GenerateTokenService;
use SmartDato\ColissimoSdk\Type\GenerateTokenServiceResponse;
use SmartDato\ColissimoSdk\Type\GetBordereauByNumber;
use SmartDato\ColissimoSdk\Type\GetBordereauByNumberResponse;
use SmartDato\ColissimoSdk\Type\GetLabel;
use SmartDato\ColissimoSdk\Type\GetLabelResponse;
use SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDates;
use SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesResponse;
use SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesService;
use SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesServiceResponse;
use SmartDato\ColissimoSdk\Type\GetProductInter;
use SmartDato\ColissimoSdk\Type\GetProductInterResponse;
use SmartDato\ColissimoSdk\Type\GetProductInterService;
use SmartDato\ColissimoSdk\Type\GetProductInterServiceResponse;
use SmartDato\ColissimoSdk\Type\PlanPickup;
use SmartDato\ColissimoSdk\Type\PlanPickupResponse;

class ColissimoShipmentClient
{
    private Caller $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & GetLabel  $parameters
     * @return ResultInterface & GetLabelResponse
     *
     * @throws SoapException
     */
    public function getLabel(GetLabel $parameters): GetLabelResponse
    {
        $response = ($this->caller)('getLabel', $parameters);

        \Psl\Type\instance_of(GetLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateBordereauByParcelsNumbers  $parameters
     * @return ResultInterface & GenerateBordereauByParcelsNumbersResponse
     *
     * @throws SoapException
     */
    public function generateBordereauByParcelsNumbers(GenerateBordereauByParcelsNumbers $parameters): GenerateBordereauByParcelsNumbersResponse
    {
        $response = ($this->caller)('generateBordereauByParcelsNumbers', $parameters);

        \Psl\Type\instance_of(GenerateBordereauByParcelsNumbersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateTokenService  $parameters
     * @return ResultInterface & GenerateTokenServiceResponse
     *
     * @throws SoapException
     */
    public function generateTokenService(GenerateTokenService $parameters): GenerateTokenServiceResponse
    {
        $response = ($this->caller)('generateTokenService', $parameters);

        \Psl\Type\instance_of(GenerateTokenServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GetProductInterService  $parameters
     * @return ResultInterface & GetProductInterServiceResponse
     *
     * @throws SoapException
     */
    public function getProductInterService(GetProductInterService $parameters): GetProductInterServiceResponse
    {
        $response = ($this->caller)('getProductInterService', $parameters);

        \Psl\Type\instance_of(GetProductInterServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateCN23  $parameters
     * @return ResultInterface & GenerateCN23Response
     *
     * @throws SoapException
     */
    public function generateCN23(GenerateCN23 $parameters): GenerateCN23Response
    {
        $response = ($this->caller)('generateCN23', $parameters);

        \Psl\Type\instance_of(GenerateCN23Response::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GetBordereauByNumber  $parameters
     * @return ResultInterface & GetBordereauByNumberResponse
     *
     * @throws SoapException
     */
    public function getBordereauByNumber(GetBordereauByNumber $parameters): GetBordereauByNumberResponse
    {
        $response = ($this->caller)('getBordereauByNumber', $parameters);

        \Psl\Type\instance_of(GetBordereauByNumberResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GetListMailBoxPickingDates  $parameters
     * @return ResultInterface & GetListMailBoxPickingDatesResponse
     *
     * @throws SoapException
     */
    public function getListMailBoxPickingDates(GetListMailBoxPickingDates $parameters): GetListMailBoxPickingDatesResponse
    {
        $response = ($this->caller)('getListMailBoxPickingDates', $parameters);

        \Psl\Type\instance_of(GetListMailBoxPickingDatesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateLabelService  $parameters
     * @return ResultInterface & GenerateLabelServiceResponse
     *
     * @throws SoapException
     */
    public function generateLabelService(GenerateLabelService $parameters): GenerateLabelServiceResponse
    {
        $response = ($this->caller)('generateLabelService', $parameters);

        \Psl\Type\instance_of(GenerateLabelServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateCN23Service  $parameters
     * @return ResultInterface & GenerateCN23ServiceResponse
     *
     * @throws SoapException
     */
    public function generateCN23Service(GenerateCN23Service $parameters): GenerateCN23ServiceResponse
    {
        $response = ($this->caller)('generateCN23Service', $parameters);

        \Psl\Type\instance_of(GenerateCN23ServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateLabel  $parameters
     * @return ResultInterface & GenerateLabelResponse
     *
     * @throws SoapException
     */
    public function generateLabel(GenerateLabel $parameters): GenerateLabelResponse
    {
        $response = ($this->caller)('generateLabel', $parameters);

        \Psl\Type\instance_of(GenerateLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & PlanPickup  $parameters
     * @return ResultInterface & PlanPickupResponse
     *
     * @throws SoapException
     */
    public function planPickup(PlanPickup $parameters): PlanPickupResponse
    {
        $response = ($this->caller)('planPickup', $parameters);

        \Psl\Type\instance_of(PlanPickupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateBordereauByParcelsNumbersService  $parameters
     * @return ResultInterface & GenerateBordereauByParcelsNumbersServiceResponse
     *
     * @throws SoapException
     */
    public function generateBordereauByParcelsNumbersService(GenerateBordereauByParcelsNumbersService $parameters): GenerateBordereauByParcelsNumbersServiceResponse
    {
        $response = ($this->caller)('generateBordereauByParcelsNumbersService', $parameters);

        \Psl\Type\instance_of(GenerateBordereauByParcelsNumbersServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GenerateToken  $parameters
     * @return ResultInterface & GenerateTokenResponse
     *
     * @throws SoapException
     */
    public function generateToken(GenerateToken $parameters): GenerateTokenResponse
    {
        $response = ($this->caller)('generateToken', $parameters);

        \Psl\Type\instance_of(GenerateTokenResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & CheckGenerateLabel  $parameters
     * @return ResultInterface & CheckGenerateLabelResponse
     *
     * @throws SoapException
     */
    public function checkGenerateLabel(CheckGenerateLabel $parameters): CheckGenerateLabelResponse
    {
        $response = ($this->caller)('checkGenerateLabel', $parameters);

        \Psl\Type\instance_of(CheckGenerateLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GetListMailBoxPickingDatesService  $parameters
     * @return ResultInterface & GetListMailBoxPickingDatesServiceResponse
     *
     * @throws SoapException
     */
    public function getListMailBoxPickingDatesService(GetListMailBoxPickingDatesService $parameters): GetListMailBoxPickingDatesServiceResponse
    {
        $response = ($this->caller)('getListMailBoxPickingDatesService', $parameters);

        \Psl\Type\instance_of(GetListMailBoxPickingDatesServiceResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & GetProductInter  $parameters
     * @return ResultInterface & GetProductInterResponse
     *
     * @throws SoapException
     */
    public function getProductInter(GetProductInter $parameters): GetProductInterResponse
    {
        $response = ($this->caller)('getProductInter', $parameters);

        \Psl\Type\instance_of(GetProductInterResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
