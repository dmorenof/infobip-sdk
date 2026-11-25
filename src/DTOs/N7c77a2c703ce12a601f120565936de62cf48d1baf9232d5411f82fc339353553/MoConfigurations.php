<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MoConfigurations
 */
final class MoConfigurations extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'totalCount' => [
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurations\ConfigurationsCollection $configurations;
    /**
     * Format: int32
     */
    public int $totalCount {
        set {
            $this->assigning('totalCount', $value);
            $this->totalCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configurations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->configurations = new \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurations\ConfigurationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\StoredMoConfiguration::class)) : parent::assignMember($name, $value),
            'totalCount' => is_int($value) ? $this->totalCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
