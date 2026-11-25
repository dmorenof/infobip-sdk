<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf;

/**
 * ValidateAddressResponse
 */
final class ValidateAddressResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of physical valid addresses that matches your input.
     */
    public \InfobipSDK\Collections\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\ValidateAddressResponse\ValidAddressesCollection $validAddresses;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'validAddresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->validAddresses = new \InfobipSDK\Collections\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\ValidateAddressResponse\ValidAddressesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Address::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
