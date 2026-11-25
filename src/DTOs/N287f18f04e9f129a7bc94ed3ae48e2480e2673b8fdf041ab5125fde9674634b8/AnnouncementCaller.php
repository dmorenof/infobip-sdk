<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * AnnouncementCaller
 *
 * Announcement to be played to a caller before they dial in to the callee.
 */
final class AnnouncementCaller extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of an audio file to be played to a caller. Required if `fileUrl` is not provided.
     */
    public string $fileId;
    /**
     * URL of a file played to a caller. Required if `fileId` is not provided.
     */
    public string $fileUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
