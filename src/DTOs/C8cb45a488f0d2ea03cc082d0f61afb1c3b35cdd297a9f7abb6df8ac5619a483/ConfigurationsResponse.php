<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483;

/**
 * ConfigurationsResponse
 */
final class ConfigurationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'configurations',
];

    /**
     * List of configurations.
     */
    public \InfobipSDK\Collections\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ConfigurationsResponse\ConfigurationsCollection $configurations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configurations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->configurations = new \InfobipSDK\Collections\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ConfigurationsResponse\ConfigurationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ConfigurationResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
