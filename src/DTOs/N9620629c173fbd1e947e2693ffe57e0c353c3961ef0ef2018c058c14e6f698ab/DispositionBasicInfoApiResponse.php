<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * DispositionBasicInfoApiResponse
 */
final class DispositionBasicInfoApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Conversation id.
     */
    public string $conversationId;
    /**
     * A list of fields with values.
     */
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\DispositionBasicInfoApiResponse\FieldsCollection $fields;
    /**
     * Form id.
     */
    public string $formId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\DispositionBasicInfoApiResponse\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\DispositionBasicInfoFieldApiResponse::class)) : parent::assignMember($name, $value),
            'formId' => is_string($value) ? $this->formId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
