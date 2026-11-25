<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Component
 *
 * Child components contained in the box.
 */
class Component extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ComponentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ComponentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
