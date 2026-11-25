<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * IbResourceCoverageKey
 */
class IbResourceCoverageKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'resourceType',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'resourceType';
    public const array DISCRIMINATOR_MAPPING = [
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AlphaCoverageKey' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AlphaCoverageKey',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleCoverageKey' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AppleCoverageKey',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberCoverageKey' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberCoverageKey',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelCoverageKey' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OpenChannelCoverageKey',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsCoverageKey' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\RcsCoverageKey',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberCoverageKey' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberCoverageKey',
        'ALPHANUMERIC' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AlphaCoverageKey',
        'APPLE_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AppleCoverageKey',
        'NUMBER' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberCoverageKey',
        'OPEN_CHANNEL_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OpenChannelCoverageKey',
        'RCS_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\RcsCoverageKey',
        'VIBER_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberCoverageKey',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType $resourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resourceType' => is_string($value) ? $this->resourceType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
