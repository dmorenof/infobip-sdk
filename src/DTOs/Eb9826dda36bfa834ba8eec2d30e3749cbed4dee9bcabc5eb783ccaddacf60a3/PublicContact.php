<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicContact
 *
 * Primary contact details.
 */
final class PublicContact extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
    'firstName',
    'lastName',
    'phoneNumber',
    'title',
];

    protected const array VALIDATION = [
    'email' => [
        'minLength' => 0,
        'maxLength' => 254,
    ],
    'firstName' => [
        'minLength' => 0,
        'maxLength' => 100,
    ],
    'lastName' => [
        'minLength' => 0,
        'maxLength' => 100,
    ],
];

    /**
     * Contact email address.
     * Example: "john.doe&#64;example.com"
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Contact first name.
     * Example: "John"
     */
    public string $firstName {
        set {
            $this->assigning('firstName', $value);
            $this->firstName = $value;
        }
    }
    /**
     * Contact last name.
     * Example: "Doe"
     */
    public string $lastName {
        set {
            $this->assigning('lastName', $value);
            $this->lastName = $value;
        }
    }
    /**
     * Contact phone number.
     * Example: "14155551234"
     */
    public string $phoneNumber;
    /**
     * Contact job title.
     * Example: "CTO"
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
