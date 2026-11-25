<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * IntegerRequirementValidation
 *
 * Validation rules.
 */
final class IntegerRequirementValidation extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maxValue' => [
            'format' => 'int32',
        ],
        'minValue' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The maximum value of the integer.
     * Format: int32
     */
    public int $maxValue {
        set {
            $this->assigning('maxValue', $value);
            $this->maxValue = $value;
        }
    }
    /**
     * The minimum value of the integer.
     * Format: int32
     */
    public int $minValue {
        set {
            $this->assigning('minValue', $value);
            $this->minValue = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxValue' => is_int($value) ? $this->maxValue = $value : parent::assignMember($name, $value),
            'minValue' => is_int($value) ? $this->minValue = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
