<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Container
 *
 * Flex Message contents. A bubble or carousel container.
 */
class Container extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.BubbleContainer' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\BubbleContainer',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.CarouselContainer' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CarouselContainer',
        'BUBBLE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\BubbleContainer',
        'CAROUSEL' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CarouselContainer',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ContainerType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ContainerType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
