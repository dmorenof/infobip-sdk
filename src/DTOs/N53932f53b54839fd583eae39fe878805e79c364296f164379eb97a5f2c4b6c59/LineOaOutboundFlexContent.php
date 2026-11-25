<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaOutboundFlexContent
 */
final class LineOaOutboundFlexContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'altText' => [
            'minLength' => 0,
            'maxLength' => 400,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Alternative text shown when Flex Message cannot be displayed, for example in push notifications or devices that do not support Flex Message.
     * Example: "This is a Flex Message"
     */
    public string $altText {
        set {
            $this->assigning('altText', $value);
            $this->altText = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Container $contents;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altText' => is_string($value) ? $this->altText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
