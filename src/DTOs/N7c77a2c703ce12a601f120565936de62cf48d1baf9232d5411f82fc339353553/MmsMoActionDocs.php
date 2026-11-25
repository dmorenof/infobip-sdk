<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MmsMoActionDocs
 *
 * Forwarding MO action.
 */
class MmsMoActionDocs extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.MmsHttpForwardActionDocs' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MmsHttpForwardActionDocs',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.MmsPullActionDocs' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MmsPullActionDocs',
    'HTTP_FORWARD' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MmsHttpForwardActionDocs',
    'PULL' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MmsPullActionDocs',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
