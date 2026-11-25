<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b;

/**
 * CallsConfigurationPage
 */
final class CallsConfigurationPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\CallsConfigurationPage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\CallsConfigurationPage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429\CallsConfigurationResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
