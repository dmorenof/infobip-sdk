<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * AnswerRequest
 */
final class AnswerRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AnswerRequest\CustomDataMap $customData;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRecordingRequest $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRecordingRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
