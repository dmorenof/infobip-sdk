<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * NameContent
 *
 * Contains information about contact's name.
 */
final class NameContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'firstName',
    'formattedName',
];

    protected const array VALIDATION = [
    'firstName' => [
        'minLength' => 1,
    ],
    'formattedName' => [
        'minLength' => 1,
    ],
];

    /**
     * Contact's first name.
     */
    public string $firstName {
        set {
            $this->assigning('firstName', $value);
            $this->firstName = $value;
        }
    }
    /**
     * Contact's full name as it normally appears.
     */
    public string $formattedName {
        set {
            $this->assigning('formattedName', $value);
            $this->formattedName = $value;
        }
    }
    /**
     * Contact's last name.
     */
    public string $lastName;
    /**
     * Contact's middle name.
     */
    public string $middleName;
    /**
     * Contact's name prefix.
     */
    public string $namePrefix;
    /**
     * Contact's name suffix.
     */
    public string $nameSuffix;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'formattedName' => is_string($value) ? $this->formattedName = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'middleName' => is_string($value) ? $this->middleName = $value : parent::assignMember($name, $value),
            'namePrefix' => is_string($value) ? $this->namePrefix = $value : parent::assignMember($name, $value),
            'nameSuffix' => is_string($value) ? $this->nameSuffix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
