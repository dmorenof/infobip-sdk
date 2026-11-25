<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ConferenceComposition
 */
final class ConferenceComposition extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether to create a single recording of all participants. If set to `True`, all
     * participants are merged into a single audio or video file. Otherwise, all participants will have their
     * own individual audio or video file.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
