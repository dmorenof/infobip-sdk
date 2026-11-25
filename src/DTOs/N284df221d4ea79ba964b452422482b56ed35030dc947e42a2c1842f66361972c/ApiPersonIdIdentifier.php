<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * ApiPersonIdIdentifier
 *
 * Identifies a person by `personId`.
 */
final class ApiPersonIdIdentifier extends \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiPersonIdentifier
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'personId' => [
        'minimum' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Numeric person identifier within the calling account.
     * Example: 12345
     * Format: int64
     */
    public int $personId {
        set {
            $this->assigning('personId', $value);
            $this->personId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'personId' => is_int($value) ? $this->personId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
