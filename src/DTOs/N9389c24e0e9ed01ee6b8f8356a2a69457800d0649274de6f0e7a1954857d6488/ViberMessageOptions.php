<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberMessageOptions
 *
 * Message options.
 */
final class ViberMessageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'campaignReferenceId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'trackingData' => [
        'minLength' => 1,
        'maxLength' => 100,
    ],
];

    /**
     * Enables activation check for sensitive messages. When true, validates that the user has not recently activated Viber on any device. If validation passes message will be sent only to the end user's [primary device](https://www.infobip.com/docs/viber/business-messages/api) (phone or tablet). Supported for text only content type. This feature must be enabled for the sender beforehand. Please contact support to arrange activation.
     */
    public bool $activationCheck;
    /**
     * Defines if the message should be charged using Viber's session rate if applicable. The session rate is supported for text only, image only and `FILE` content types. For text only content type `sessionRate` won't be applied when `toPrimaryDeviceOnly` or `activationCheck` option is enabled. For image only content type `sessionRate` won't be applied when `toPrimaryDeviceOnly` option is enabled.
     */
    public bool $applySessionRate;
    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId {
        set {
            $this->assigning('campaignReferenceId', $value);
            $this->campaignReferenceId = $value;
        }
    }
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\DeliveryTimeWindow $deliveryTimeWindow;
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\Label $label;
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\Platform $platform;
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\DefaultSmsFailover $smsFailover;
    /**
     * Defines if the message should be sent only to the end user's [primary device](https://www.infobip.com/docs/viber/business-messages/api) (phone or tablet). Primary device concept is supported for text only, image only, `FILE` content type. For text only `toPrimaryDeviceOnly` won't be applied when `activationCheck` option is enabled.
     */
    public bool $toPrimaryDeviceOnly;
    /**
     * Custom client's data that will be passed back with user's reply. It is not supported for `TEMPLATE` or when `toPrimaryDeviceOnly` option is enabled for text only and image only content types or when `activationCheck` option is enabled for text only content type.
     */
    public string $trackingData {
        set {
            $this->assigning('trackingData', $value);
            $this->trackingData = $value;
        }
    }
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activationCheck' => is_bool($value) ? $this->activationCheck = $value : parent::assignMember($name, $value),
            'applySessionRate' => is_bool($value) ? $this->applySessionRate = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\Label::from($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\Platform($value) : parent::assignMember($name, $value),
            'smsFailover' => $value instanceof \stdClass ? $this->smsFailover = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\DefaultSmsFailover($value) : parent::assignMember($name, $value),
            'toPrimaryDeviceOnly' => is_bool($value) ? $this->toPrimaryDeviceOnly = $value : parent::assignMember($name, $value),
            'trackingData' => is_string($value) ? $this->trackingData = $value : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
