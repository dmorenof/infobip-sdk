<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N73e6f414ccb2e1e41274c061b50cf5765f69b642a3e0cca54b0248eb3baf086d;

/**
 * RecordingResponse
 */
final class RecordingResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'application',
        'recording',
    ];

    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallLinkRecordingApplication $application;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Recording $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Recording($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
