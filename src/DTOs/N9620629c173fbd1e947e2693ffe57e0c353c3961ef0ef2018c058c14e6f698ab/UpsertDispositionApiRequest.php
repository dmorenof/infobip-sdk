<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * UpsertDispositionApiRequest
 */
final class UpsertDispositionApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fields',
];

    protected const array VALIDATION = [
    'fields' => [
        'minItems' => 1,
        'maxItems' => 2147483647,
    ],
];

    /**
     * List of fields and agent inputs to those fields.
     */
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpsertDispositionApiRequest\FieldsCollection $fields {
        set {
            $this->assigning('fields', $value);
            $this->fields = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpsertDispositionApiRequest\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpsertDispositionFieldApiRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
