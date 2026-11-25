<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * AccountsResponse
 */
final class AccountsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of accounts
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\AccountsResponse\AccountsCollection $accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->accounts = new \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\AccountsResponse\AccountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Account::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
