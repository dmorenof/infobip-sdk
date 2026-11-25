<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * PortedNetwork
 *
 * Information about phone number ported network.
 */
final class PortedNetwork extends \Dmorenof\SdkRuntime\DTO
{
    public string $countryName;
    public string $countryPrefix;
    public string $networkName;
    public string $networkPrefix;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'countryPrefix' => is_string($value) ? $this->countryPrefix = $value : parent::assignMember($name, $value),
            'networkName' => is_string($value) ? $this->networkName = $value : parent::assignMember($name, $value),
            'networkPrefix' => is_string($value) ? $this->networkPrefix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
