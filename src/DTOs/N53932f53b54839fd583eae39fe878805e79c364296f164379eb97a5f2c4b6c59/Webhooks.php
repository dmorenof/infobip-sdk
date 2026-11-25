<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Webhooks
 *
 * Provides options for configuring message webhooks.
 */
final class Webhooks extends \Dmorenof\SdkRuntime\DTO
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
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\MessageDeliveryReporting $delivery;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\MessageDeliveryReporting($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
