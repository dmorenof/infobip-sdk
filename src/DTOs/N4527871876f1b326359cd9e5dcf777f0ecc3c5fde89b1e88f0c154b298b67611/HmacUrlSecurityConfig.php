<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * HmacUrlSecurityConfig
 */
final class HmacUrlSecurityConfig extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\UrlSecurityConfig
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\HmacAlgorithm $algorithm;
    /**
     * Secret key.
     */
    public string $secretKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'algorithm' => is_string($value) ? $this->algorithm = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\HmacAlgorithm::from($value) : parent::assignMember($name, $value),
            'secretKey' => is_string($value) ? $this->secretKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
