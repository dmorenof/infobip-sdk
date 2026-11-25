<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * UpsertDispositionFieldApiRequest
 *
 * List of fields and agent inputs to those fields.
 */
final class UpsertDispositionFieldApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fieldId',
    'value',
];

    protected const array VALIDATION = [
    'fieldId' => [
        'minLength' => 1,
    ],
    'value' => [
        'minLength' => 0,
        'maxLength' => 5000,
    ],
];

    /**
     * Id of the field.
     */
    public string $fieldId {
        set {
            $this->assigning('fieldId', $value);
            $this->fieldId = $value;
        }
    }
    /**
     * Disposition value.
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
