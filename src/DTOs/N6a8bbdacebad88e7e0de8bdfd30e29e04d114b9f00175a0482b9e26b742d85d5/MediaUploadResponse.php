<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * MediaUploadResponse
 */
final class MediaUploadResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaId',
    ];

    /**
     * Identifier of the uploaded media returned by Zalo.
     * Example: "dbuzvadgdaaq9jjam7"
     */
    public string $mediaId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mediaId' => is_string($value) ? $this->mediaId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
