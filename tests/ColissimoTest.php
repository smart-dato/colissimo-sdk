<?php

use Carbon\CarbonImmutable;
use SmartDato\ColissimoSdk\Colissimo;
use SmartDato\ColissimoSdk\Type\GenerateLabel;
use SmartDato\ColissimoSdk\Type\GenerateLabelGenerateLabelRequest;
use SmartDato\ColissimoSdk\Type\Track;
use SmartDato\ColissimoSdk\Type\TypeAdresse;
use SmartDato\ColissimoSdk\Type\TypeLetter;
use SmartDato\ColissimoSdk\Type\TypeLetterAddressee;
use SmartDato\ColissimoSdk\Type\TypeLetterCustomsDeclarations;
use SmartDato\ColissimoSdk\Type\TypeLetterParcel;
use SmartDato\ColissimoSdk\Type\TypeLetterSender;
use SmartDato\ColissimoSdk\Type\TypeLetterService;
use SmartDato\ColissimoSdk\Type\TypeOutputFormat;
use Soap\Psr18AttachmentsMiddleware\Storage\AttachmentStorage;
use VCR\VCR;

test('track', function () {
    VCR::turnOn();
    VCR::insertCassette('track.json');
    $connector = new Colissimo;
    $reference = '6A04970730936';

    $parameters = new Track(
        accountNumber: config('collisimo-sdk.auth.contract'),
        password: config('collisimo-sdk.auth.password'),
        skybillNumber: $reference,
        apiKey: null
    );
    $response = $connector->getTrack($parameters);

    expect($response->getReturn()->getErrorCode())->toEqual(0);
    VCR::eject();
    VCR::turnOff();
})->skip('only testable with soap mockserver');

test('shipment', function (): void {
    $connector = new Colissimo;
    $attachmentStorage = app(AttachmentStorage::class);
    $reference = '';
    $generateLabelRequest = new GenerateLabelGenerateLabelRequest;
    $letter = new TypeLetter;

    $service = new TypeLetterService;
    $service = $service->withProductCode('DOM');
    $service = $service->withDepositDate(CarbonImmutable::parse('13:55 14.01.2026'));
    $service = $service->withMailBoxPicking(false);
    $service = $service->withMailBoxPickingDate(null);
    $service = $service->withVatCode(null);
    $service = $service->withVatPercentage(null);
    $service = $service->withVatAmount(null);
    $service = $service->withTransportationAmount(null);
    $service = $service->withTotalAmount(null);
    $service = $service->withOrderNumber($reference);
    $service = $service->withCommercialName('SMARTDATO');
    $service = $service->withReturnTypeChoice(2);
    $letter = $letter->withService($service);

    $parcel = new TypeLetterParcel;
    $parcel = $parcel->withParcelNumber(null);
    $parcel = $parcel->withInsuranceAmount(null);
    $parcel = $parcel->withInsuranceValue(null);
    $parcel = $parcel->withRecommendationLevel(null);
    $parcel = $parcel->withWeight(5);
    $parcel = $parcel->withNonMachinable(false);
    $parcel = $parcel->withCOD(false);
    $parcel = $parcel->withCODAmount(null);
    $parcel = $parcel->withCODCurrency(null);
    $parcel = $parcel->withReturnReceipt(null);
    $parcel = $parcel->withInstructions('REMETTRE AU GARDIEN');
    $parcel = $parcel->withPickupLocationId(null);
    $letter = $letter->withParcel($parcel);

    $customsDeclarations = new TypeLetterCustomsDeclarations;
    $customsDeclarations = $customsDeclarations->withIncludeCustomsDeclarations(false);
    $customsDeclarations = $customsDeclarations->withContents(null);
    $customsDeclarations = $customsDeclarations->withImportersReference(null);
    $letter = $letter->withCustomsDeclarations($customsDeclarations);

    $sender = new TypeLetterSender;
    $parcelKey = '';
    $sender = $sender->withSenderParcelRef($parcelKey);
    $senderAddress = new TypeAdresse;
    $senderAddress = $senderAddress->withCompanyName('Company Name');
    $senderAddress = $senderAddress->withFirstName('');
    $senderAddress = $senderAddress->withLastName('');
    $senderAddress = $senderAddress->withLine0('');
    $senderAddress = $senderAddress->withLine1('');
    $senderAddress = $senderAddress->withLine2('');
    $senderAddress = $senderAddress->withLine3('Address Line');
    $senderAddress = $senderAddress->withCountryCode('FR');
    $senderAddress = $senderAddress->withCity('SAINT-LAURENT-DE-MURE');
    $senderAddress = $senderAddress->withZipCode('69721');
    $senderAddress = $senderAddress->withPhoneNumber('');
    $senderAddress = $senderAddress->withMobileNumber('');
    $senderAddress = $senderAddress->withDoorCode1(null);
    $senderAddress = $senderAddress->withDoorCode2(null);
    $senderAddress = $senderAddress->withEmail('em@il.com');
    $senderAddress = $senderAddress->withIntercom(null);
    $senderAddress = $senderAddress->withLanguage('FR');
    $sender = $sender->withAddress($senderAddress);
    $letter = $letter->withSender($sender);

    $deliveryAddress = new TypeLetterAddressee;
    $deliveryAddress = $deliveryAddress->withAddresseeParcelRef('refreceiver_1');
    $deliveryAddress = $deliveryAddress->withCodeBarForReference(false);
    $deliveryAddress = $deliveryAddress->withServiceInfo('service info');
    $deliveryAddress = $deliveryAddress->withPromotionCode('');
    $deliveryAddressDetail = new TypeAdresse;
    $deliveryAddressDetail = $deliveryAddressDetail->withCompanyName('Company Name');
    $deliveryAddressDetail = $deliveryAddressDetail->withFirstName('');
    $deliveryAddressDetail = $deliveryAddressDetail->withLastName('');
    $deliveryAddressDetail = $deliveryAddressDetail->withLine0('');
    $deliveryAddressDetail = $deliveryAddressDetail->withLine1('');
    $deliveryAddressDetail = $deliveryAddressDetail->withLine2('');
    $deliveryAddressDetail = $deliveryAddressDetail->withLine3('Address Line');
    $deliveryAddressDetail = $deliveryAddressDetail->withCountryCode('FR');
    $deliveryAddressDetail = $deliveryAddressDetail->withCity('SAINT-LAURENT-DE-MURE');
    $deliveryAddressDetail = $deliveryAddressDetail->withZipCode('69721');
    $deliveryAddressDetail = $deliveryAddressDetail->withPhoneNumber('');
    $deliveryAddressDetail = $deliveryAddressDetail->withMobileNumber('');
    $deliveryAddressDetail = $deliveryAddressDetail->withDoorCode1(null);
    $deliveryAddressDetail = $deliveryAddressDetail->withDoorCode2(null);
    $deliveryAddressDetail = $deliveryAddressDetail->withEmail('em@il.com');
    $deliveryAddressDetail = $deliveryAddressDetail->withIntercom(null);
    $deliveryAddressDetail = $deliveryAddressDetail->withLanguage('FR');
    $deliveryAddress = $deliveryAddress->withAddress($deliveryAddressDetail);
    $letter = $letter->withAddressee($deliveryAddress);

    $generateLabelRequest = $generateLabelRequest->withLetter($letter);

    $outputFormat = new TypeOutputFormat;
    $outputFormat = $outputFormat->withX(0);
    $outputFormat = $outputFormat->withY(0);
    $outputFormat = $outputFormat->withOutputPrintingType('PDF_10x15_300dpi');
    $outputFormat = $outputFormat->withDematerialized(true);
    $outputFormat = $outputFormat->withReturnType('');
    $outputFormat = $outputFormat->withPrintCODDocument(false);
    $generateLabelRequest = $generateLabelRequest->withOutputFormat($outputFormat);

    $generateLabelRequest = $generateLabelRequest->withContractNumber(config('collisimo-sdk.auth.contract'));
    $generateLabelRequest = $generateLabelRequest->withPassword(config('collisimo-sdk.auth.password'));

    $parameters = new GenerateLabel($generateLabelRequest);
    $response = $connector->generateLabel($parameters);
    $attachments = $attachmentStorage->responseAttachments();
    expect($response->getReturn()?->getLabelV2Response()->getParcelNumber())->toEqual('1');
    expect($attachments->count())->toEqual(1);
})->skip('only testable with soap mockserver');
