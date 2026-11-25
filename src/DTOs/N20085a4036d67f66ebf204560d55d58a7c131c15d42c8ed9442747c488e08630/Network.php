<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Network Information
 *
 * Information about the roaming network.
 */
final class Network extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'networkId' => [
            'format' => 'int32',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'countryName',
        'countryPrefix',
        'networkId',
        'networkName',
        'networkPrefix',
    ];

    /**
     * Optional name of the country the network operates in.
     */
    public string $countryName;
    /**
     * Country prefix.
     */
    public string $countryPrefix;
    /**
     * ID of the network.
     * Format: int32
     */
    public int $networkId {
        set {
            $this->assigning('networkId', $value);
            $this->networkId = $value;
        }
    }
    /**
     * Optional human readable name of the network.
     */
    public string $networkName;
    /**
     * Network prefix.
     */
    public string $networkPrefix;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'countryPrefix' => is_string($value) ? $this->countryPrefix = $value : parent::assignMember($name, $value),
            'networkId' => is_int($value) ? $this->networkId = $value : parent::assignMember($name, $value),
            'networkName' => is_string($value) ? $this->networkName = $value : parent::assignMember($name, $value),
            'networkPrefix' => is_string($value) ? $this->networkPrefix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
