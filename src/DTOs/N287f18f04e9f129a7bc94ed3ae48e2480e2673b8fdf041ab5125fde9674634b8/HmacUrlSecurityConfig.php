<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * HmacUrlSecurityConfig
 */
final class HmacUrlSecurityConfig extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\UrlSecurityConfig
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'secretKey',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\HmacAlgorithm $algorithm;
    /**
     * Algorithm used for encryption.
     */
    public string $secretKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'algorithm' => is_string($value) ? $this->algorithm = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\HmacAlgorithm::from($value) : parent::assignMember($name, $value),
            'secretKey' => is_string($value) ? $this->secretKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
