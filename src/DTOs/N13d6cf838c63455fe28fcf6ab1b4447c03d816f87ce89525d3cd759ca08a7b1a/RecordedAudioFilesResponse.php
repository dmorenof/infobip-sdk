<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * RecordedAudioFilesResponse
 */
final class RecordedAudioFilesResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array of recorded files metadata, one for each recorded file.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RecordedAudioFilesResponse\FilesCollection $files;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RecordedAudioFilesResponse\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RecordedIvrFile::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
