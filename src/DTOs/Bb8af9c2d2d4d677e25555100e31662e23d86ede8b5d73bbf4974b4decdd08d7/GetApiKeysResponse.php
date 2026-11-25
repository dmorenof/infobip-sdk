<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * GetApiKeysResponse
 */
final class GetApiKeysResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'paging',
];

    /**
     * List of API keys.
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\GetApiKeysResponse\KeysCollection $apiKeys;
    public \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\PagingResponse $paging;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->apiKeys = new \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\GetApiKeysResponse\KeysCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey::class)) : parent::assignMember($name, $value),
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\PagingResponse($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
