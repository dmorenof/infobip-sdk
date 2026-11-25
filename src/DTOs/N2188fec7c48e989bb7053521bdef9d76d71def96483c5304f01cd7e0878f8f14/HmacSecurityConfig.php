<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * HmacSecurityConfig
 */
final class HmacSecurityConfig extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\SecurityConfig
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HmacAlgorithm $algorithm;
    public string $secretKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'algorithm' => is_string($value) ? $this->algorithm = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HmacAlgorithm::from($value) : parent::assignMember($name, $value),
            'secretKey' => is_string($value) ? $this->secretKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
