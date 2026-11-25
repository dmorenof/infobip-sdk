<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaOutboundTemplateContent
 */
final class LineOaOutboundTemplateContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContent
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
     * Alternative text shown when the template cannot be displayed, for example in push notifications.
     * Example: "This is a template message"
     */
    public string $altText {
        set {
            $this->assigning('altText', $value);
            $this->altText = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineTemplatePayload $template;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altText' => is_string($value) ? $this->altText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
