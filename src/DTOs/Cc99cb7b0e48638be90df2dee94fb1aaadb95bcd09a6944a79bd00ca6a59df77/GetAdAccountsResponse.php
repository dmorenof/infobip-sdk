<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * GetAdAccountsResponse
 */
final class GetAdAccountsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of ad accounts.
     */
    public \InfobipSDK\Collections\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetAdAccountsResponse\AdAccountsCollection $adAccounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->adAccounts = new \InfobipSDK\Collections\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetAdAccountsResponse\AdAccountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AdAccountResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
