<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829;

/**
 * SipTrunkRequest
 */
class SipTrunkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'billingPackage',
    'channelLimit',
    'name',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.AuthenticatedSipTrunkRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\AuthenticatedSipTrunkRequest',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ProviderSipTrunkRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ProviderSipTrunkRequest',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.RegisteredSipTrunkRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\RegisteredSipTrunkRequest',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.StaticSipTrunkRequest' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\StaticSipTrunkRequest',
    'AUTHENTICATED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\AuthenticatedSipTrunkRequest',
    'PROVIDER' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ProviderSipTrunkRequest',
    'REGISTERED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\RegisteredSipTrunkRequest',
    'STATIC' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\StaticSipTrunkRequest',
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

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BillingPackage $billingPackage;
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
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkLocation $location;
    /**
     * SIP trunk name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billingPackage' => $value instanceof \stdClass ? $this->billingPackage = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BillingPackage($value) : parent::assignMember($name, $value),
            'channelLimit' => is_int($value) ? $this->channelLimit = $value : parent::assignMember($name, $value),
            'internationalCallsAllowed' => is_bool($value) ? $this->internationalCallsAllowed = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkLocation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
