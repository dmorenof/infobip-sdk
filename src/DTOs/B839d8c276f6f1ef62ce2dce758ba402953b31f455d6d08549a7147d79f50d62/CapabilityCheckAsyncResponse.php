<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CapabilityCheckAsyncResponse
 */
final class CapabilityCheckAsyncResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkId',
        'capabilityCheckRequestStates',
    ];

    /**
     * The ID that uniquely identifies the request. This ID is automatically generated and will be included in the API response.
     */
    public string $bulkId;
    /**
     * The sync response from the RCS capability checker for the specified phone numbers. Represents the current status of the requests.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckAsyncResponse\CheckStatesCollection $capabilityCheckRequestStates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'capabilityCheckRequestStates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->capabilityCheckRequestStates = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckAsyncResponse\CheckStatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckRequestState::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
