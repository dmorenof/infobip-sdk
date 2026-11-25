<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsDescriptiveAmount
 */
final class InteractiveOrderDetailsDescriptiveAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'value',
    ];

    protected const array VALIDATION = [
        'description' => [
            'minLength' => 0,
            'maxLength' => 60,
        ],
        'value' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
    ];

    /**
     * Description of the value.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Value multiplied by the offset (100 for INR and BRL).
     * Format: int32
     */
    public int $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
