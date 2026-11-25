<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * ActionAfterSubmission
 *
 * Action after the submission
 */
final class ActionAfterSubmission extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
    'value',
];

    public \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ActionAfterSubmissionType $type;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ActionAfterSubmissionType::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
