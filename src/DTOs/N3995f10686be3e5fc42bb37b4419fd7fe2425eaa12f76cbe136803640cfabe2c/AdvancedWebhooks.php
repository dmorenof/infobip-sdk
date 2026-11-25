<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * AdvancedWebhooks
 *
 * Provides options for configuring message webhooks.
 */
final class AdvancedWebhooks extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 4000,
        ],
    ];

    /**
     * Additional data that can be used for identifying, managing, or monitoring a message. Data included here will also be automatically included in the message Delivery Report. The maximum value is 4000 characters.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * Preferred delivery report content type, `application/json` or `application/xml`.
     */
    public string $contentType;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\AdvancedMessageDeliveryReporting $delivery;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\AdvancedMessageDeliveryReporting($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
