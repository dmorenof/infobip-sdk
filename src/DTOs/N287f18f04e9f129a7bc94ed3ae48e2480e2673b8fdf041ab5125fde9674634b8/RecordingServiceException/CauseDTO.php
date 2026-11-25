<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingServiceException;

final class CauseDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $localizedMessage;
    public string $message;
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingServiceException\Cause\StackTraceCollection $stackTrace;
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingServiceException\Cause\SuppressedCollection $suppressed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'localizedMessage' => is_string($value) ? $this->localizedMessage = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
