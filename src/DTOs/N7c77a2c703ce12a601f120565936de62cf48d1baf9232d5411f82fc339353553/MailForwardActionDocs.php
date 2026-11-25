<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MailForwardActionDocs
 */
final class MailForwardActionDocs extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionDocs
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'mail' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional action description.
     * Example: "My description."
     */
    public string $description;
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
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'mail' => is_string($value) ? $this->mail = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
