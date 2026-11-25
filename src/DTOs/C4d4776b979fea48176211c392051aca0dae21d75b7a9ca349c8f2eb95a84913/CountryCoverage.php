<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * CountryCoverage
 *
 * Coverage information by country showing launch status for each provider.
 */
final class CountryCoverage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCode',
    'providers',
];

    /**
     * Country code where the sender is being launched.
     */
    public string $countryCode;
    /**
     * List of providers in the country and their launch status.
     */
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CountryCoverage\ProvidersCollection $providers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'providers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->providers = new \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CountryCoverage\ProvidersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchStatus::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
