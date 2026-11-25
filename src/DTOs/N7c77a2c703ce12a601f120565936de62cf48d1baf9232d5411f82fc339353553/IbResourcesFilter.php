<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * IbResourcesFilter
 *
 * Filter for resources.
 */
class IbResourcesFilter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'resourceType',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'resourceType';
    public const array DISCRIMINATOR_MAPPING = [
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AlphaResourceFilter' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AlphaResourceFilter',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleResourceFilter' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AppleResourceFilter',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberResourceFilter' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberResourceFilter',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelResourceFilter' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OpenChannelResourceFilter',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsResourceFilter' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\RcsResourceFilter',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberResourceFilter' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberResourceFilter',
    'ALPHANUMERIC' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AlphaResourceFilter',
    'APPLE_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AppleResourceFilter',
    'NUMBER' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NumberResourceFilter',
    'OPEN_CHANNEL_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OpenChannelResourceFilter',
    'RCS_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\RcsResourceFilter',
    'VIBER_RESOURCE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberResourceFilter',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $resourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resourceType' => is_string($value) ? $this->resourceType = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
