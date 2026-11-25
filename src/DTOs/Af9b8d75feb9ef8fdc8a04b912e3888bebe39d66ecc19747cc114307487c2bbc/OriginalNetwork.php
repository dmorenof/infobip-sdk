<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * OriginalNetwork
 *
 * Information about phone number original network.
 */
final class OriginalNetwork extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Optional name of the country the network operates in.
     * Example: "Croatia"
     */
    public ?string $countryName;
    /**
     * Country prefix, i.e. the international dialing/calling code of the country.
     * Example: "385"
     */
    public string $countryPrefix;
    /**
     * Optional human readable name of the network.
     * Example: "T-Mobile"
     */
    public ?string $networkName;
    /**
     * Network prefix, i.e. the numeric code identifying the network/operator within the country's numbering plan.
     * Example: "99"
     */
    public string $networkPrefix;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryName' => $value === null || is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'countryPrefix' => is_string($value) ? $this->countryPrefix = $value : parent::assignMember($name, $value),
            'networkName' => $value === null || is_string($value) ? $this->networkName = $value : parent::assignMember($name, $value),
            'networkPrefix' => is_string($value) ? $this->networkPrefix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
