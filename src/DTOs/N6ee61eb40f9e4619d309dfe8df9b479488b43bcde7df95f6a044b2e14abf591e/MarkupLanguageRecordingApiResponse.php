<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e;

/**
 * MarkupLanguageRecordingApiResponse
 *
 * Calls Markup Language recording API response.
 */
final class MarkupLanguageRecordingApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'application',
        'recording',
    ];

    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallsMarkupLanguageApplication $application;
    public \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordingMetadata $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application' => $value instanceof \stdClass ? $this->application = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallsMarkupLanguageApplication($value) : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordingMetadata($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
