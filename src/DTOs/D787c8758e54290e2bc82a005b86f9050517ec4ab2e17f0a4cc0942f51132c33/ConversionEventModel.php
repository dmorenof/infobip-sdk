<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33;

/**
 * ConversionEventModel
 *
 * Conversion events collection.
 */
final class ConversionEventModel extends \Dmorenof\SdkRuntime\DTO
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
    /**
     * Details should contain value and currency information indicating exact value of the conversion that happened. Value can be 0. Currency has to be the same as it is set on ad account.
     * Example: {"currency":"USD","value":123}
     */
    public \InfobipSDK\DTOs\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionEventModel\DetailsMap $details;
    public \InfobipSDK\Enums\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversionTime' => is_string($value) ? $this->conversionTime = $value : parent::assignMember($name, $value),
            'ctwaClickId' => is_string($value) ? $this->ctwaClickId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
