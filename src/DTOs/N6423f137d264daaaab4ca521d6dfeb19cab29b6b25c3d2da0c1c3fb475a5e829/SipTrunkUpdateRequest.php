<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829;

/**
 * SipTrunkUpdateRequest
 */
class SipTrunkUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.AuthenticatedSipTrunkUpdateRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\AuthenticatedSipTrunkUpdateRequest',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ProviderSipTrunkUpdateRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ProviderSipTrunkUpdateRequest',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.RegisteredSipTrunkUpdateRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\RegisteredSipTrunkUpdateRequest',
        '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.StaticSipTrunkUpdateRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\StaticSipTrunkUpdateRequest',
        'AUTHENTICATED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\AuthenticatedSipTrunkUpdateRequest',
        'PROVIDER' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ProviderSipTrunkUpdateRequest',
        'REGISTERED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\RegisteredSipTrunkUpdateRequest',
        'STATIC' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\StaticSipTrunkUpdateRequest',
    ];

    protected const array VALIDATION = [
        'channelLimit' => [
            'maximum' => 1000,
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Maximum number of concurrent channels.
     * Format: int32
     */
    public int $channelLimit {
        set {
            $this->assigning('channelLimit', $value);
            $this->channelLimit = $value;
        }
    }
    /**
     * Indicates whether international calls should be allowed. Calls between different countries are considered international.
     */
    public bool $internationalCallsAllowed;
    /**
     * SIP trunk name.
     */
    public string $name;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channelLimit' => is_int($value) ? $this->channelLimit = $value : parent::assignMember($name, $value),
            'internationalCallsAllowed' => is_bool($value) ? $this->internationalCallsAllowed = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
