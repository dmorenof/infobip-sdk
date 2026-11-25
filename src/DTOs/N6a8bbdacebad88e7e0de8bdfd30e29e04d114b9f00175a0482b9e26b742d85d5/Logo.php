<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Logo
 *
 * Logo with light and dark variants.
 */
final class Logo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dark',
        'light',
    ];

    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Attachment $dark;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Attachment $light;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dark' => $value instanceof \stdClass ? $this->dark = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Attachment($value) : parent::assignMember($name, $value),
            'light' => $value instanceof \stdClass ? $this->light = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Attachment($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
