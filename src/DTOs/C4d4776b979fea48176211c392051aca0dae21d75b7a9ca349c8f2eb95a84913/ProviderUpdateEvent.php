<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * ProviderUpdateEvent
 *
 * Collection of RCS provider update events.
 */
final class ProviderUpdateEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCode',
    'event',
    'provider',
];

    /**
     * Country code (two-letter ISO 3166-1 alpha-2 standard) where the provider became available.
     */
    public string $countryCode;
    /**
     * Event type identifier for webhook notifications. Indicates the type of status change that occurred.
     */
    public string $event;
    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Provider $provider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'provider' => $value instanceof \stdClass ? $this->provider = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Provider($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
