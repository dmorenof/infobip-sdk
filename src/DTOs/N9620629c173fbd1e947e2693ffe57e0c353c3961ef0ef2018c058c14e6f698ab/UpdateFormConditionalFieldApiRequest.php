<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * UpdateFormConditionalFieldApiRequest
 */
final class UpdateFormConditionalFieldApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fieldId',
        'isRequired',
    ];

    public string $fieldId;
    public bool $isRequired;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
