<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * ConditionalFieldApiResponse
 *
 * List of fields to present if agent input matches condition value.
 */
final class ConditionalFieldApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse $field;
    /**
     * Is the conditional field required to fill?
     */
    public bool $isRequired;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => $value instanceof \stdClass ? $this->field = new \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse($value) : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
