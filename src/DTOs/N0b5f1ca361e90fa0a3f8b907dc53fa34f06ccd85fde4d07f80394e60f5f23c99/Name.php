<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Name
 *
 * Full contact name.
 */
final class Name extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'firstName',
        'formattedName',
        'lastName',
        'middleName',
        'namePrefix',
        'nameSuffix',
    ];

    /**
     * First name of a contact. Mandatory value.
     */
    public string $firstName;
    /**
     * Full name as it normally appears. Mandatory value.
     */
    public string $formattedName;
    /**
     * Last name of a contact.
     */
    public string $lastName;
    /**
     * Middle name of a contact.
     */
    public string $middleName;
    /**
     * Name prefix of a contact.
     */
    public string $namePrefix;
    /**
     * Name suffix of a contact.
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
