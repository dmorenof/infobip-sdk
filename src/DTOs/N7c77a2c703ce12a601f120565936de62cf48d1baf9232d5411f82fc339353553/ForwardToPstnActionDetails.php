<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ForwardToPstnActionDetails
 */
final class ForwardToPstnActionDetails extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceActionDetails
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'pstnNumber' => [
            'minLength' => 1,
            'pattern' => '^[1-9]\\d{1,14}$',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Must be written in E.164 standard format.
     * Example: "41793026727"
     */
    public string $pstnNumber {
        set {
            $this->assigning('pstnNumber', $value);
            $this->pstnNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pstnNumber' => is_string($value) ? $this->pstnNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
