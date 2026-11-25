<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineTemplatePayload
 *
 * Template payload (buttons, confirm, carousel, or image carousel).
 */
class LineTemplatePayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ButtonsLineTemplatePayload' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ButtonsLineTemplatePayload',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.CarouselLineTemplatePayload' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CarouselLineTemplatePayload',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ConfirmLineTemplatePayload' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ConfirmLineTemplatePayload',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ImageCarouselLineTemplatePayload' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ImageCarouselLineTemplatePayload',
        'BUTTONS' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ButtonsLineTemplatePayload',
        'CAROUSEL' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CarouselLineTemplatePayload',
        'CONFIRM' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ConfirmLineTemplatePayload',
        'IMAGE_CAROUSEL' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ImageCarouselLineTemplatePayload',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineTemplatePayloadType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineTemplatePayloadType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
