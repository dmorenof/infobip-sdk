<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * FileRecording
 *
 * List of call recordings.
 */
final class FileRecording extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Id of the call.
     */
    public string $callId;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\File $file;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'file' => $value instanceof \stdClass ? $this->file = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\File($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
