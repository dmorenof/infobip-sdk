<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * WebhookRecording
 *
 * Recording of the call.
 */
final class WebhookRecording extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of call recordings.
     */
    public \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\WebhookRecording\CallRecordingsCollection $callRecordings;
    /**
     * List of composed files.
     */
    public \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\WebhookRecording\ComposedFilesCollection $composedFiles;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callRecordings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->callRecordings = new \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\WebhookRecording\CallRecordingsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\FileRecording::class)) : parent::assignMember($name, $value),
            'composedFiles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->composedFiles = new \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\WebhookRecording\ComposedFilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\File::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
