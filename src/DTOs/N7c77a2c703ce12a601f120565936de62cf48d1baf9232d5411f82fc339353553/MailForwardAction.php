<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MailForwardAction
 *
 * Used for sending e-mail to specified destination.
 */
final class MailForwardAction extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoAction
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'mail' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Specifies e-mail destination.
     */
    public string $mail {
        set {
            $this->assigning('mail', $value);
            $this->mail = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mail' => is_string($value) ? $this->mail = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
