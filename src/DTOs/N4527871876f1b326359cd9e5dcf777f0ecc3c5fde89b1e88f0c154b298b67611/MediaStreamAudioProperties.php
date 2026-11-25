<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MediaStreamAudioProperties
 */
final class MediaStreamAudioProperties extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mediaStreamConfigId',
    ];

    /**
     * Media stream configuration ID.
     */
    public string $mediaStreamConfigId;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaStreamMultiChannel $multiChannel;
    /**
     * Indicates whether outbound media should be replaced. The replacement media is received from the url defined in the media stream configuration.
     */
    public bool $replaceMedia;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mediaStreamConfigId' => is_string($value) ? $this->mediaStreamConfigId = $value : parent::assignMember($name, $value),
            'multiChannel' => $value instanceof \stdClass ? $this->multiChannel = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaStreamMultiChannel($value) : parent::assignMember($name, $value),
            'replaceMedia' => is_bool($value) ? $this->replaceMedia = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
