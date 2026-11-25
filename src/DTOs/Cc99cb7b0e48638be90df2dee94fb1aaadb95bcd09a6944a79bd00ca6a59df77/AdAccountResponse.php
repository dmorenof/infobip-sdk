<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * AdAccountResponse
 *
 * List of ad accounts.
 */
final class AdAccountResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Currency used by the ad account.
     * Example: "USD"
     */
    public string $currency;
    /**
     * Ad account ID.
     * Example: "act_3339405976215927"
     */
    public string $id;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AdAccountStatus $status;
    /**
     * Total amount spent.
     * Example: 186
     * Format: int64
     */
    public int $totalSpent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AdAccountStatus::from($value) : parent::assignMember($name, $value),
            'totalSpent' => is_int($value) ? $this->totalSpent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
