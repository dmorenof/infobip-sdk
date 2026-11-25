<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60;

/**
 * MetaConversionModel
 *
 * Conversions collection.
 */
final class MetaConversionModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ctwaClickId',
        'type',
    ];

    protected const array VALIDATION = [
        'ctwaClickId' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Time when the conversion happened. Must be in the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`. Date must not be older than 7 days. If omitted then current time of submission is used.
     * Example: "2024-05-14T10:11:45.057Z"
     * Format: date-time
     */
    public string $conversionTime;
    /**
     * ctwaClickId is unique identifier of each click on the ad that clicks to WhatsApp. ctwaClickId is contained within the inbound message originating from the ad within the referral object. Check payload [here](https://www.infobip.com/docs/api/channels/whatsapp/whatsapp-inbound-messages/receive-whatsapp-inbound-messages).
     * Example: "ARAkLkA8rmlFeiCktEJQ-QT"
     */
    public string $ctwaClickId {
        set {
            $this->assigning('ctwaClickId', $value);
            $this->ctwaClickId = $value;
        }
    }
    public \InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\ConversionDetails $details;
    public \InfobipSDK\Enums\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\MetaConversionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversionTime' => is_string($value) ? $this->conversionTime = $value : parent::assignMember($name, $value),
            'ctwaClickId' => is_string($value) ? $this->ctwaClickId = $value : parent::assignMember($name, $value),
            'details' => $value instanceof \stdClass ? $this->details = new \InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\ConversionDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\MetaConversionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
