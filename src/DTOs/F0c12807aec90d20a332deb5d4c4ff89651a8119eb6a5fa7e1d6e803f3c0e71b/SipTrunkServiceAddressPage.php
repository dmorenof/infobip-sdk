<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b;

/**
 * SipTrunkServiceAddressPage
 */
final class SipTrunkServiceAddressPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkServiceAddressPage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkServiceAddressPage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
