<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * CreateFormFieldApiRequest
 *
 * Fields attached to a form.
 */
final class CreateFormFieldApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fieldId',
];

    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateFormFieldApiRequest\ConditionsCollection $conditions;
    public string $fieldId;
    public bool $isRequired;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateFormFieldApiRequest\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateFieldConditionApiRequest::class)) : parent::assignMember($name, $value),
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
