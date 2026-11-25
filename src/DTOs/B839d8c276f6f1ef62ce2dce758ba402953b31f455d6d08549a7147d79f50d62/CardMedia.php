<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CardMedia
 *
 * Object defining display of card media.
 */
final class CardMedia extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
        'height',
    ];

    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardResourceSchema $file;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Height $height;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Resource $thumbnail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file' => $value instanceof \stdClass ? $this->file = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardResourceSchema($value) : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Height::from($value) : parent::assignMember($name, $value),
            'thumbnail' => $value instanceof \stdClass ? $this->thumbnail = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Resource($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
