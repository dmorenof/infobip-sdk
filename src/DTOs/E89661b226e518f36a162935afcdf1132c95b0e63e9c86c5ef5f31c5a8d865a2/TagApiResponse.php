<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * TagApiResponse
 * Example: {"name":"Tag 1"}
 */
final class TagApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'createdAt',
    'id',
    'updatedAt',
];

    /**
     * Format: date-time
     */
    public string $createdAt;
    public string $id;
    /**
     * Tag name. Numbers, uppercase and lowercase letters, along with '.' and '_' characters are allowed!
     */
    public string $name;
    /**
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
