<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * RecordingComposition
 *
 * Sets recording composition options.
 */
final class RecordingComposition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'enabled',
];

    /**
     * Indicates whether to create a single recording of both participants. If set to `true`, both participants are merged into a single audio or video file. Otherwise, both participants will have their own individual audio or video file.
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
