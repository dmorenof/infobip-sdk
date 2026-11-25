<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * FieldConditionApiResponse
 *
 * List of conditions
 */
final class FieldConditionApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of fields to present if agent input matches condition value.
     */
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldConditionApiResponse\FieldsCollection $fields;
    /**
     * Id of the condition.
     */
    public string $id;
    /**
     * Condition value.
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldConditionApiResponse\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\ConditionalFieldApiResponse::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
