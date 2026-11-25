<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraKycMatchRequestDto
 *
 * Camara Know Your Customer Match request object
 */
final class CamaraKycMatchRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'phoneNumber',
    ];

    /**
     * Complete address of the customer.
     * Example: "742 Evergreen Terrace, Springfield, IL 62704"
     */
    public string $address;
    /**
     * The birthdate of the customer, in RFC 3339 / ISO 8601 calendar date format (YYYY-MM-DD).
     * Example: "1985-07-15"
     * Format: date
     */
    public string $birthdate;
    /**
     * Country of the customer's address. Format ISO 3166-1 alpha-2.
     * Example: "US"
     */
    public string $country;
    /**
     * Email address of the customer in the RFC specified format (local-part&#64;domain).
     * Example: "jane.smith&#64;example.com"
     * Format: email
     */
    public string $email;
    /**
     * Last name, family name, or surname of the customer.
     * Example: "Smith"
     */
    public string $familyName;
    /**
     * Last/family/sur-name at birth of the customer.
     * Example: "Johnson"
     */
    public string $familyNameAtBirth;
    /**
     * Gender of the customer.
     * Example: "FEMALE"
     */
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraKycMatchRequestDto\GenderEnum $gender;
    /**
     * First/given name or compound first/given name of the customer.
     * Example: "Jane"
     */
    public string $givenName;
    /**
     * Specific identifier of the house needed depending on the property type. For example, number of apartment in an apartment building.
     * Example: "Apt 2B"
     */
    public string $houseNumberExtension;
    /**
     * Id number associated to the official identity document in the country.
     * Example: "987654321"
     */
    public string $idDocument;
    /**
     * Locality of the customer's address.
     * Example: "Springfield"
     */
    public string $locality;
    /**
     * Middle name/s of the customer.
     * Example: "Marie"
     */
    public string $middleNames;
    /**
     * Complete name of the customer, usually composed of first/given name and last/family/sur-name in a country.
     * Example: "Jane Smith"
     */
    public string $name;
    /**
     * Complete name of the customer in Hankaku-Kana format (reading of name) for Japan.
     * Example: "ｼﾞｪｰﾝ ｽﾐｽ"
     */
    public string $nameKanaHankaku;
    /**
     * Complete name of the customer in Zenkaku-Kana format (reading of name) for Japan.
     * Example: "ジェーン スミス"
     */
    public string $nameKanaZenkaku;
    /**
     * Mobile phone number (MSISDN) to verify. The number must be in international format.
     * Example: "+441134961234"
     */
    public string $phoneNumber;
    /**
     * Zip code or postal code.
     * Example: "62704"
     */
    public string $postalCode;
    /**
     * Region/prefecture of the customer's address.
     * Example: "Illinois"
     */
    public string $region;
    /**
     * Name of the street of the customer's address. It should not include the type of the street.
     * Example: " Evergreen Terrace"
     */
    public string $streetName;
    /**
     * The street number of the customer's address.  Number identifying a specific property on the 'streetName'.
     * Example: "742"
     */
    public string $streetNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'birthdate' => is_string($value) ? $this->birthdate = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'familyName' => is_string($value) ? $this->familyName = $value : parent::assignMember($name, $value),
            'familyNameAtBirth' => is_string($value) ? $this->familyNameAtBirth = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraKycMatchRequestDto\GenderEnum::from($value) : parent::assignMember($name, $value),
            'givenName' => is_string($value) ? $this->givenName = $value : parent::assignMember($name, $value),
            'houseNumberExtension' => is_string($value) ? $this->houseNumberExtension = $value : parent::assignMember($name, $value),
            'idDocument' => is_string($value) ? $this->idDocument = $value : parent::assignMember($name, $value),
            'locality' => is_string($value) ? $this->locality = $value : parent::assignMember($name, $value),
            'middleNames' => is_string($value) ? $this->middleNames = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'nameKanaHankaku' => is_string($value) ? $this->nameKanaHankaku = $value : parent::assignMember($name, $value),
            'nameKanaZenkaku' => is_string($value) ? $this->nameKanaZenkaku = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'postalCode' => is_string($value) ? $this->postalCode = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'streetName' => is_string($value) ? $this->streetName = $value : parent::assignMember($name, $value),
            'streetNumber' => is_string($value) ? $this->streetNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
