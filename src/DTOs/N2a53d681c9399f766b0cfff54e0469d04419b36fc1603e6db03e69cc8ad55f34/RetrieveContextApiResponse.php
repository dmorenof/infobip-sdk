<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * RetrieveContextApiResponse
 */
final class RetrieveContextApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contexts',
    ];

    /**
     * List of retrieved context nodes.
     */
    public \InfobipSDK\Collections\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextApiResponse\ContextsCollection $contexts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contexts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contexts = new \InfobipSDK\Collections\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\RetrieveContextApiResponse\ContextsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\ContextNode::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
