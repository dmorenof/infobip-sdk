<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * Contact
 */
final class Contact extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'phoneNumber',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
    'phoneNumber' => [
        'minLength' => 0,
        'maxLength' => 18,
    ],
];

    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
