<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * BlocklistDeleteRequest
 *
 * Blocklist request.
 */
final class BlocklistDeleteRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'blocklist',
    ];

    protected const array VALIDATION = [
        'blocklist' => [
            'minItems' => 1,
        ],
    ];

    /**
     * Blocklist elements that need to be removed from blocklist. Number of destinations cannot exceed 50 000.
     */
    public \InfobipSDK\Collections\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistDeleteRequest\BlocklistCollection $blocklist {
        set {
            $this->assigning('blocklist', $value);
            $this->blocklist = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocklist' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->blocklist = new \InfobipSDK\Collections\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistDeleteRequest\BlocklistCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistDelete::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
