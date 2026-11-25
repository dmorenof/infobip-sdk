<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CapabilityCheckSyncResponse
 */
final class CapabilityCheckSyncResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'capabilityCheckResults',
];

    /**
     * The result of the RCS capability check for the specified phone numbers.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckSyncResponse\CheckResultsCollection $capabilityCheckResults;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capabilityCheckResults' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->capabilityCheckResults = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckSyncResponse\CheckResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckSyncResult::class)) : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
