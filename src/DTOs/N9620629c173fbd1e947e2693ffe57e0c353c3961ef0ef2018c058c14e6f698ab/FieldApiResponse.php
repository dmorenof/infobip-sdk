<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * FieldApiResponse
 */
final class FieldApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $createdAt;
    /**
     * Field id.
     */
    public string $id;
    public bool $isDefault;
    /**
     * Is field enabled
     */
    public bool $isEnabled;
    /**
     * List of available operators based on field type.
     */
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse\OperatorsCollection $operators;
    /**
     * List of available options.
     */
    public \InfobipSDK\Collections\StringCollection $options;
    /**
     * Regular expression. Valid only for REGEX field type.
     */
    public string $regex;
    /**
     * Field title.
     */
    public string $title;
    public \InfobipSDK\Enums\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldTypeApiModel $type;
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isDefault' => is_bool($value) ? $this->isDefault = $value : parent::assignMember($name, $value),
            'isEnabled' => is_bool($value) ? $this->isEnabled = $value : parent::assignMember($name, $value),
            'options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->options = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'regex' => is_string($value) ? $this->regex = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldTypeApiModel::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
