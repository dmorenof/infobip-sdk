<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * ApiKeys
 */
final class ApiKeys extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of API keys
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeys\KeysCollection $apiKeys;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->apiKeys = new \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeys\KeysCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeyResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
