<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * TemplateTagApiResponse
 *
 * List of template tags.
 * Example: {"name":"Template tag","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"}
 */
final class TemplateTagApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp when template tag was created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Template tag ID.
     */
    public string $id;
    /**
     * Template tag name.
     */
    public string $name;
    /**
     * Timestamp when template tag was updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
