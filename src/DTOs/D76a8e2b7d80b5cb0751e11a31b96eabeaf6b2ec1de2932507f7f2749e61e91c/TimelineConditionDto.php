<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * TimelineConditionDto
 *
 * Specify in which timespan did the event occur.
 */
final class TimelineConditionDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'occurred',
        'operator',
    ];

    protected const array VALIDATION = [
        'end' => [
            'format' => 'int32',
        ],
        'start' => [
            'format' => 'int32',
        ],
    ];

    /**
     * End of timespan: For relative operators, specify the number of units. For absolute operators, provide a Unix timestamp.
     * Example: 30
     * Format: int32
     */
    public int $end {
        set {
            $this->assigning('end', $value);
            $this->end = $value;
        }
    }
    public \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionOccurred $occurred;
    public \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionOperator $operator;
    /**
     * Start of timespan: For relative operators, specify the number of units. For absolute operators, provide a Unix timestamp.
     * Example: 60
     * Format: int32
     */
    public int $start {
        set {
            $this->assigning('start', $value);
            $this->start = $value;
        }
    }
    public \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionUnits $units;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => is_int($value) ? $this->end = $value : parent::assignMember($name, $value),
            'occurred' => is_string($value) ? $this->occurred = \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionOccurred::from($value) : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionOperator::from($value) : parent::assignMember($name, $value),
            'start' => is_int($value) ? $this->start = $value : parent::assignMember($name, $value),
            'units' => is_string($value) ? $this->units = \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionUnits::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
