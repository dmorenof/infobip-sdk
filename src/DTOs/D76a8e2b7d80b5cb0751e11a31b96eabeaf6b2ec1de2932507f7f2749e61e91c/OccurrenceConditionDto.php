<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * OccurrenceConditionDto
 *
 * Specify how many times did the event occur.
 */
final class OccurrenceConditionDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'operation',
    'times',
];

    protected const array VALIDATION = [
    'times' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\OccurrenceConditionOperation $operation;
    /**
     * Number of times the event has occurred.
     * Example: 5
     * Format: int32
     */
    public int $times {
        set {
            $this->assigning('times', $value);
            $this->times = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'operation' => is_string($value) ? $this->operation = \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\OccurrenceConditionOperation::from($value) : parent::assignMember($name, $value),
            'times' => is_int($value) ? $this->times = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
