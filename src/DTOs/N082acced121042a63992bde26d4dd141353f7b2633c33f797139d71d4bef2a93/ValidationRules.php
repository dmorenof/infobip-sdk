<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * ValidationRules
 */
final class ValidationRules extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maxLength' => [
            'format' => 'int32',
        ],
    ];

    public string $datePattern;
    public \InfobipSDK\Collections\StringCollection $forbiddenSymbols;
    /**
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    public string $maxValue;
    public string $minValue;
    public string $pattern;
    public string $sample;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'datePattern' => is_string($value) ? $this->datePattern = $value : parent::assignMember($name, $value),
            'forbiddenSymbols' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->forbiddenSymbols = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'maxValue' => is_string($value) ? $this->maxValue = $value : parent::assignMember($name, $value),
            'minValue' => is_string($value) ? $this->minValue = $value : parent::assignMember($name, $value),
            'pattern' => is_string($value) ? $this->pattern = $value : parent::assignMember($name, $value),
            'sample' => is_string($value) ? $this->sample = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
