<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * UpdateFieldConditionApiRequest
 */
final class UpdateFieldConditionApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conditionalFields',
    'value',
];

    protected const array VALIDATION = [
    'conditionalFields' => [
        'minItems' => 1,
        'maxItems' => 2147483647,
    ],
];

    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpdateFieldConditionApiRequest\ConditionalFieldsCollection $conditionalFields {
        set {
            $this->assigning('conditionalFields', $value);
            $this->conditionalFields = $value;
        }
    }
    public string $id;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditionalFields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditionalFields = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpdateFieldConditionApiRequest\ConditionalFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpdateFormConditionalFieldApiRequest::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
