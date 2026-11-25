<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e;

/**
 * StartMediaStreamRequest
 */
final class StartMediaStreamRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaStream',
    ];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaStream $mediaStream;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mediaStream' => $value instanceof \stdClass ? $this->mediaStream = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaStream($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
