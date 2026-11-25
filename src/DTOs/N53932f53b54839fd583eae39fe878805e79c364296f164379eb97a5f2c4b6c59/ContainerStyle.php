<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ContainerStyle
 *
 * Styles applied to the bubble blocks.
 */
final class ContainerStyle extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle $body;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle $footer;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle $header;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle $hero;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle($value) : parent::assignMember($name, $value),
            'footer' => $value instanceof \stdClass ? $this->footer = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle($value) : parent::assignMember($name, $value),
            'header' => $value instanceof \stdClass ? $this->header = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle($value) : parent::assignMember($name, $value),
            'hero' => $value instanceof \stdClass ? $this->hero = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BlockStyle($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
