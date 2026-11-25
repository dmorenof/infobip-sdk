<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CvVetImportRequest
 */
final class CvVetImportRequest extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VetImportRequest
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'authorizationToken' => [
        'pattern' => '^cv(\\|[^|]+){5}$',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Campaign Verify authorization token
     */
    public string $authorizationToken {
        set {
            $this->assigning('authorizationToken', $value);
            $this->authorizationToken = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorizationToken' => is_string($value) ? $this->authorizationToken = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
