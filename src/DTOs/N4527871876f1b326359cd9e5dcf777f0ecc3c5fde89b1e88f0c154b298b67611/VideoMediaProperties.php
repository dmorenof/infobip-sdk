<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * VideoMediaProperties
 *
 * Video media properties.
 */
final class VideoMediaProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether the end user can receive remote videos.
     */
    public bool $blind;
    /**
     * Indicates whether there is a video feed.
     */
    public bool $camera;
    /**
     * Indicates whether the end user is sharing their screen.
     */
    public bool $screenShare;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blind' => is_bool($value) ? $this->blind = $value : parent::assignMember($name, $value),
            'camera' => is_bool($value) ? $this->camera = $value : parent::assignMember($name, $value),
            'screenShare' => is_bool($value) ? $this->screenShare = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
