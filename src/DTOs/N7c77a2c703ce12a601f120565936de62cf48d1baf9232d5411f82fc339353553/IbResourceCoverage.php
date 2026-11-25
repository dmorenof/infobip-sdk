<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * IbResourceCoverage
 *
 * Information about the networks configured for the resource.
 */
final class IbResourceCoverage extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'outbound' => [
        'uniqueItems' => true,
    ],
];

    /**
     * Indicates if inbound configuration exists.
     * Example: false
     */
    public bool $inbound;
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverage\OutboundCollection $outbound {
        set {
            $this->assigning('outbound', $value);
            $this->outbound = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inbound' => is_bool($value) ? $this->inbound = $value : parent::assignMember($name, $value),
            'outbound' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->outbound = new \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverage\OutboundCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NetworkView::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
