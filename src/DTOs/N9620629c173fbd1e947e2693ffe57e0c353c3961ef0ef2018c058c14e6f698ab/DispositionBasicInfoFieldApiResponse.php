<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * DispositionBasicInfoFieldApiResponse
 *
 * A list of fields with values.
 */
final class DispositionBasicInfoFieldApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Disposition id.
     */
    public string $dispositionId;
    /**
     * Value of the field.
     */
    public string $dispositionValue;
    /**
     * Field id.
     */
    public string $fieldId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dispositionId' => is_string($value) ? $this->dispositionId = $value : parent::assignMember($name, $value),
            'dispositionValue' => is_string($value) ? $this->dispositionValue = $value : parent::assignMember($name, $value),
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
