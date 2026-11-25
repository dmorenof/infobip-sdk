<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * StaticSipTrunkResponse
 */
final class StaticSipTrunkResponse extends \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'channelLimit' => [
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * List of destination hosts.
     */
    public \InfobipSDK\Collections\StringCollection $destinationHosts;
    /**
     * List of source hosts.
     */
    public \InfobipSDK\Collections\StringCollection $sourceHosts;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SelectionStrategy $strategy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinationHosts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->destinationHosts = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'sourceHosts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->sourceHosts = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'strategy' => is_string($value) ? $this->strategy = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SelectionStrategy::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
