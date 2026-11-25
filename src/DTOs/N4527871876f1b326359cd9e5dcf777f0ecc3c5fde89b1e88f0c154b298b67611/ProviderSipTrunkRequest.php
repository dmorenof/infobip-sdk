<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ProviderSipTrunkRequest
 */
final class ProviderSipTrunkRequest extends \InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkRequest
{
    public const array REQUIRED_FIELDS = [
        'billingPackage',
        'channelLimit',
        'name',
    ];

    protected const array VALIDATION = [
        'channelLimit' => [
            'maximum' => 1000,
            'format' => 'int32',
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 128,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProvider $provider;
    /**
     * Indicates whether communication is secured by the TLS protocol.
     */
    public bool $tls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tls' => is_bool($value) ? $this->tls = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
