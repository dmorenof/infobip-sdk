<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * NationalIdentityNumberDto
 *
 * Check if provided MSISDN belongs to user with provided national identity number.
 */
final class NationalIdentityNumberDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'nationalId' => [
        'minLength' => 1,
    ],
];

    /**
     * Document type that will be used to check for a match against a mobile phone number.
     * Currently, used and mandatory only in Colombia. Available values are `CC`, `CE` and `NIT`.
     *
     */
    public string $documentType;
    /**
     * National Identification Number that will be used to check for a match against a mobile phone number.
     *
     */
    public string $nationalId {
        set {
            $this->assigning('nationalId', $value);
            $this->nationalId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentType' => is_string($value) ? $this->documentType = $value : parent::assignMember($name, $value),
            'nationalId' => is_string($value) ? $this->nationalId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
