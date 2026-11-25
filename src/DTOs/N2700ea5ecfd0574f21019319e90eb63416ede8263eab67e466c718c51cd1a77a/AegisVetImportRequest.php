<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * AegisVetImportRequest
 */
final class AegisVetImportRequest extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VetImportRequest
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'externalVetId' => [
            'minLength' => 1,
        ],
        'vettingToken' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Aegis external vetting ID
     */
    public string $externalVetId {
        set {
            $this->assigning('externalVetId', $value);
            $this->externalVetId = $value;
        }
    }
    /**
     * Aegis vetting token
     */
    public string $vettingToken {
        set {
            $this->assigning('vettingToken', $value);
            $this->vettingToken = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'externalVetId' => is_string($value) ? $this->externalVetId = $value : parent::assignMember($name, $value),
            'vettingToken' => is_string($value) ? $this->vettingToken = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
