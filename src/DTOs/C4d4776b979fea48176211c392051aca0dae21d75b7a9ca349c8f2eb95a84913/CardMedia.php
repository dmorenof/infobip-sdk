<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * CardMedia
 */
final class CardMedia extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'file',
    'height',
];

    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CardResourceSchema $file;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Height $height;
    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Resource $thumbnail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file' => $value instanceof \stdClass ? $this->file = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CardResourceSchema($value) : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Height::from($value) : parent::assignMember($name, $value),
            'thumbnail' => $value instanceof \stdClass ? $this->thumbnail = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Resource($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
