<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MmsMoConfigurationRequest
 */
final class MmsMoConfigurationRequest extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurationRequest
{
    public const array REQUIRED_FIELDS = [
    'channel',
];

    protected const array PROPERTY_MAP = [
    'unset' => 'unset_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'unset_' => 'unset',
];

    protected const array VALIDATION = [
    'countryCode' => [
        'pattern' => '^[A-Z]{2}$',
    ],
    'keyword' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'unset_' => [
        'uniqueItems' => true,
    ],
    'username' => [
        'minLength' => 0,
        'maxLength' => 255,
        'pattern' => '^(?!\\s*$).+',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AutoResponseActionV2Request $autoResponse;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\BlockListConfigurationRequest $blockListConfiguration;
    /**
     * Country code in two-letter ISO standard. Required for identifying country specific resources (for instance, short code number types).
     * Example: "GB"
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsMoActionDocs $forwarding;
    /**
     * Required if <code>numberKey</code> not present.
     * Example: "41793026727"
     */
    public string $number;
    /**
     * Required if <code>number</code> not present.
     * Example: "58BC6DB7966CB9F69A91EB956DF73239"
     */
    public string $numberKey;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs $platform;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autoResponse' => $value instanceof \stdClass ? $this->autoResponse = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AutoResponseActionV2Request($value) : parent::assignMember($name, $value),
            'blockListConfiguration' => $value instanceof \stdClass ? $this->blockListConfiguration = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\BlockListConfigurationRequest($value) : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'numberKey' => is_string($value) ? $this->numberKey = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
