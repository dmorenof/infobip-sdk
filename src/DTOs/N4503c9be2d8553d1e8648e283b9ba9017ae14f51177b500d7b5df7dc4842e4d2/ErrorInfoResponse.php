<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2;

/**
 * MobileIdentityErrorInfoResponse
 *
 * Information about error occurred. If there is no error this object is omitted.
 */
final class ErrorInfoResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of error occurred for easier comprehension.
     */
    public string $description;
    /**
     * Unique identifier of occurred error on Infobip platform.
     * Format: integer
     */
    public float $id;
    /**
     * Unique string identifier of occurred error on Mobile Identity platform.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_float($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
