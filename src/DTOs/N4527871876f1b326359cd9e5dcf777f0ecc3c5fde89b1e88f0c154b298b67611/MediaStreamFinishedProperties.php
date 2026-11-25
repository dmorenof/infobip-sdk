<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MediaStreamFinishedProperties
 *
 * Properties of the media stream finished event.
 */
final class MediaStreamFinishedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Media-stream configuration ID.
     */
    public string $configId;
    /**
     * Media stream connection closed: additional info.
     */
    public string $reason;
    /**
     * Unique stream identifier.
     */
    public string $streamId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configId' => is_string($value) ? $this->configId = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'streamId' => is_string($value) ? $this->streamId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
