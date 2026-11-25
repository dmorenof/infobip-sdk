<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * AdvancedWebhooksWithSeen
 *
 * Provides options for configuring message webhooks.
 */
final class AdvancedWebhooksWithSeen extends \Dmorenof\SdkRuntime\DTO
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
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\AdvancedMessageDeliveryReporting $delivery;
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SeenStatusReporting $seen;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\AdvancedMessageDeliveryReporting($value) : parent::assignMember($name, $value),
            'seen' => $value instanceof \stdClass ? $this->seen = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SeenStatusReporting($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
