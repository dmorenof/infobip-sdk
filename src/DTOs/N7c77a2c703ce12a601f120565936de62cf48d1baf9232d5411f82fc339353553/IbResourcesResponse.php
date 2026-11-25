<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * IbResourcesResponse
 *
 * Response containing information about IB resources.
 */
final class IbResourcesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PageInfo $paging;
    /**
     * List of resources.
     */
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourcesResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PageInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
