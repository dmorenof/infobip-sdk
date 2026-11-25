<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * FormFieldApiResponse
 *
 * List of fields attached to a form
 */
final class FormFieldApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of conditions
     */
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormFieldApiResponse\ConditionsCollection $conditions;
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse $field;
    /**
     * Is a field mandatory
     */
    public bool $isRequired;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormFieldApiResponse\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldConditionApiResponse::class)) : parent::assignMember($name, $value),
            'field' => $value instanceof \stdClass ? $this->field = new \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse($value) : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
