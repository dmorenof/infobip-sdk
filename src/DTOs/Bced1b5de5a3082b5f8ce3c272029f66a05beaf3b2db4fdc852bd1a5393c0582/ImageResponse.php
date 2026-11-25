<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582;

/**
 * ImageResponse
 */
final class ImageResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique ID of an image.
     */
    public string $id;
    /**
     * Image name.
     */
    public string $name;
    /**
     * Image size in bytes.
     * Format: int64
     */
    public int $size;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ImageType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ImageType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
