<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MoAction
 *
 * Forward action configuration.
 */
class MoAction extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToExternalIntegrationAction' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToExternalIntegrationAction',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.HttpForwardAction' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\HttpForwardAction',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.MailForwardAction' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MailForwardAction',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NoAction' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NoAction',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.PullAction' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\PullAction',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.SmppForwardAction' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\SmppForwardAction',
        'FORWARD_TO_EXTERNAL_INTEGRATION' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToExternalIntegrationAction',
        'HTTP_FORWARD' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\HttpForwardAction',
        'MAIL_FORWARD' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MailForwardAction',
        'NO_ACTION' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\NoAction',
        'PULL' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\PullAction',
        'SMPP_FORWARD' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\SmppForwardAction',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional action description.
     * Example: "My description."
     */
    public string $description;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
