<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MediaStream
 */
final class MediaStream extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaStreamAudioProperties $audioProperties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioProperties' => $value instanceof \stdClass ? $this->audioProperties = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaStreamAudioProperties($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
