<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * SipTrunkResponse
 */
class SipTrunkResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.AuthenticatedSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\AuthenticatedSipTrunkResponse',
    '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.ProviderSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\ProviderSipTrunkResponse',
    '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.RegisteredSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\RegisteredSipTrunkResponse',
    '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.StaticSipTrunkResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\StaticSipTrunkResponse',
    'AUTHENTICATED' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\AuthenticatedSipTrunkResponse',
    'PROVIDER' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\ProviderSipTrunkResponse',
    'REGISTERED' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\RegisteredSipTrunkResponse',
    'STATIC' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\StaticSipTrunkResponse',
];

    protected const array VALIDATION = [
    'channelLimit' => [
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AnonymizationType $anonymization;
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
     * List of audio codecs supported by a SIP trunk.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AuthenticatedSipTrunkRequest\CodecsCollection $codecs;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType $dtmf;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType $fax;
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
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat $numberFormat;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SbcHosts $sbcHosts;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipOptions $sipOptions;
    /**
     * Indicates whether communication is secured by the TLS protocol.
     */
    public bool $tls;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'anonymization' => is_string($value) ? $this->anonymization = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AnonymizationType::from($value) : parent::assignMember($name, $value),
            'billingPackage' => $value instanceof \stdClass ? $this->billingPackage = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BillingPackage($value) : parent::assignMember($name, $value),
            'channelLimit' => is_int($value) ? $this->channelLimit = $value : parent::assignMember($name, $value),
            'dtmf' => is_string($value) ? $this->dtmf = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType::from($value) : parent::assignMember($name, $value),
            'fax' => is_string($value) ? $this->fax = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'internationalCallsAllowed' => is_bool($value) ? $this->internationalCallsAllowed = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkLocation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'numberFormat' => is_string($value) ? $this->numberFormat = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat::from($value) : parent::assignMember($name, $value),
            'sbcHosts' => $value instanceof \stdClass ? $this->sbcHosts = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SbcHosts($value) : parent::assignMember($name, $value),
            'sipOptions' => $value instanceof \stdClass ? $this->sipOptions = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipOptions($value) : parent::assignMember($name, $value),
            'tls' => is_bool($value) ? $this->tls = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
