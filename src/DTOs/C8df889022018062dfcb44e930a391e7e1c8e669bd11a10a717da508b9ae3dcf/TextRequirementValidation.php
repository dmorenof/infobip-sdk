<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * TextRequirementValidation
 *
 * Validation rules.
 */
final class TextRequirementValidation extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxLength' => [
        'format' => 'int32',
    ],
    'minLength' => [
        'format' => 'int32',
    ],
];

    /**
     * The maximum length of the text.
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    /**
     * The minimum length of the text.
     * Format: int32
     */
    public int $minLength {
        set {
            $this->assigning('minLength', $value);
            $this->minLength = $value;
        }
    }
    /**
     * The pattern of the text.
     */
    public string $pattern;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'minLength' => is_int($value) ? $this->minLength = $value : parent::assignMember($name, $value),
            'pattern' => is_string($value) ? $this->pattern = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
