<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * CredentialsResponse
 */
final class CredentialsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The first part of the generate Authorization header.
     */
    public string $apiId;
    /**
     * Used to generate the second part of the Authorization header.
     */
    public string $key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiId' => is_string($value) ? $this->apiId = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
