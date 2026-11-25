<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * FormApiResponse
 */
final class FormApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $createdAt;
    /**
     * List of fields attached to a form
     */
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResponse\FieldsCollection $fields;
    /**
     * Form id.
     */
    public string $id;
    /**
     * Is form marked as default one.
     */
    public bool $isDefault;
    /**
     * Is form enabled.
     */
    public bool $isEnabled;
    /**
     * Form title.
     */
    public string $title;
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResponse\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormFieldApiResponse::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isDefault' => is_bool($value) ? $this->isDefault = $value : parent::assignMember($name, $value),
            'isEnabled' => is_bool($value) ? $this->isEnabled = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
