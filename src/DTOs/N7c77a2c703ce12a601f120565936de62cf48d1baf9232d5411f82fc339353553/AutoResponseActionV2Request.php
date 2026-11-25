<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * AutoResponseActionV2Request
 *
 * Auto-response action configuration.
 * Example: {"message":"Thank you for your message.","sender":"MyAutoResponseSender","deliveryTimeWindow":{"from":"08:35","to":"16:35","days":["MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY"],"deliveryTimeZone":"USER_TIME_ZONE"}}
 */
final class AutoResponseActionV2Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
];

    protected const array VALIDATION = [
    'message' => [
        'minLength' => 0,
        'maxLength' => 1080,
    ],
];

    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * Text that will be sent as a response message.
     */
    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }
    /**
     * If set, it will override the sender of the message in autoresponse sent to the user.
     */
    public string $sender;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
