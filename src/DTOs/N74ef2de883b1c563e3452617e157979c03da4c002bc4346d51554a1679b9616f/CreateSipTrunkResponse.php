<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * CreateSipTrunkResponse
 */
class CreateSipTrunkResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.CreateAuthenticatedSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateAuthenticatedSipTrunkResponse',
        '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.CreateProviderSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateProviderSipTrunkResponse',
        '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.CreateRegisteredSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateRegisteredSipTrunkResponse',
        '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.CreateStaticSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateStaticSipTrunkResponse',
        'AUTHENTICATED' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateAuthenticatedSipTrunkResponse',
        'PROVIDER' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateProviderSipTrunkResponse',
        'REGISTERED' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateRegisteredSipTrunkResponse',
        'STATIC' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateStaticSipTrunkResponse',
    ];

    protected const array VALIDATION = [
        'channelLimit' => [
            'format' => 'int32',
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
     * SIP trunk ID.
     */
    public string $id;
    /**
     * Indicates whether international calls should be allowed. Calls between different countries are considered international.
     */
    public bool $internationalCallsAllowed;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkLocation $location;
    /**
     * SIP trunk name.
     */
    public string $name;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SbcHosts $sbcHosts;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billingPackage' => $value instanceof \stdClass ? $this->billingPackage = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BillingPackage($value) : parent::assignMember($name, $value),
            'channelLimit' => is_int($value) ? $this->channelLimit = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'internationalCallsAllowed' => is_bool($value) ? $this->internationalCallsAllowed = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkLocation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sbcHosts' => $value instanceof \stdClass ? $this->sbcHosts = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SbcHosts($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
