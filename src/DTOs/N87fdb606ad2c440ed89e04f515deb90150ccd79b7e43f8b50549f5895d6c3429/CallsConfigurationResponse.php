<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429;

/**
 * CallsConfigurationResponse
 */
final class CallsConfigurationResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Calls configuration ID.
     */
    public string $id;
    /**
     * Calls configuration name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
