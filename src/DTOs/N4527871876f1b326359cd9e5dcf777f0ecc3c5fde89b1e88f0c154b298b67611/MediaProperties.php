<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MediaProperties
 */
final class MediaProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AudioMediaProperties $audio;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoMediaProperties $video;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audio' => $value instanceof \stdClass ? $this->audio = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AudioMediaProperties($value) : parent::assignMember($name, $value),
            'video' => $value instanceof \stdClass ? $this->video = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoMediaProperties($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
