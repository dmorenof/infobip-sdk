<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloMessageOptions
 *
 * Message options.
 */
final class ZaloMessageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'campaignReferenceId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId {
        set {
            $this->assigning('campaignReferenceId', $value);
            $this->campaignReferenceId = $value;
        }
    }
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * Set to *true* when you want to send encrypted Zalo messages! In that case, you need to send encrypted values in templateData property! If the encrypted field is set to *true*, URL shortening within Zalo message will be disabled and unavailable. Ensure this configuration aligns with your use case before enabling encryption.
     */
    public bool $encrypted;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Platform $platform;
    /**
     * Mode for sending Zalo messages. `REGULAR` - Zalo messages are sent in the usual manner. `OVER_THE_LIMIT` - Allows OA to send Zalo tag 3 messages exceeding the limit (more expensive). `AUTO` - use `REGULAR` with fallback to `OVER_THE_LIMIT` if needed. Over limit sending mode is not supported for sending messages tagged as CUSTOMER_CARE or TRANSACTION.
     */
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloMessageOptions\SendingModeEnum $sendingMode;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\NonMsisdnSmsFailover $smsFailover;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'encrypted' => is_bool($value) ? $this->encrypted = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Platform($value) : parent::assignMember($name, $value),
            'sendingMode' => is_string($value) ? $this->sendingMode = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloMessageOptions\SendingModeEnum::from($value) : parent::assignMember($name, $value),
            'smsFailover' => $value instanceof \stdClass ? $this->smsFailover = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\NonMsisdnSmsFailover($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
