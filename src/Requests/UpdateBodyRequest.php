<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

final class UpdateBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'computedAttributes',
    'createdAt',
    'id',
    'integrations',
    'modifiedAt',
    'modifiedFrom',
    'origin',
];

    /**
     * Person's address, 256 characters max.
     */
    public string $address;
    /**
     * Person's date of birth, format `YYYY-MM-DD`.
     */
    public string $birthDate;
    /**
     * Person's city, 50 characters max.
     */
    public string $city;
    /**
     * Person's computed attributes grouped by type.
     */
    public \InfobipSDK\Requests\AllOfPartialPersonUpdateBody\AttributesMapRequest $computedAttributes;
    /**
     * List of phones, emails and other information how a person can be contacted.
     */
    public \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2 $contactInformation;
    /**
     * Person's country, 50 characters max.
     */
    public string $country;
    /**
     * Date and time of creation. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $createdAt;
    /**
     * List of custom attributes for the person, 4096 characters max per value.
     */
    public \InfobipSDK\Requests\AllOfPartialPersonUpdateBody\CustomAttributesMap\AttributesMapRequest $customAttributes;
    /**
     * Unique ID for a person from your or another external system, 256 characters max.
     */
    public string $externalId;
    /**
     * Person's first name, 255 characters max.
     */
    public string $firstName;
    /**
     * Person's gender.
     */
    public \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamGender $gender;
    /**
     * Unique id of the entity.
     * Format: int64
     */
    public int $id;
    /**
     * Integrations.
     */
    public \InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamIntegrationsV2 $integrations;
    /**
     * Person's last name, 255 characters max.
     */
    public string $lastName;
    /**
     * Person's middle name, 50 characters max.
     */
    public string $middleName;
    /**
     * Date and time of last modification. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     */
    public string $modifiedAt;
    /**
     * The information which describes the source of the last modification of record.
     */
    public \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin $modifiedFrom;
    /**
     * The information which describes the origin of the record.
     */
    public \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin $origin;
    /**
     * Person's preferred language. Must be in two letter ISO (xx) or language-region BCP-47 (xx-YY) format.
     */
    public string $preferredLanguage;
    /**
     * URL for the person's profile picture, 2083 characters max.
     */
    public string $profilePicture;
    /**
     * List of tags that this person has.
     */
    public \InfobipSDK\Collections\StringCollection $tags;
    /**
     * Person's type, default type is CUSTOMER.
     */
    public \InfobipSDK\Enums\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamTypeV2 $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'birthDate' => is_string($value) ? $this->birthDate = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'contactInformation' => $value instanceof \stdClass ? $this->contactInformation = new \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamGender::from($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'integrations' => $value instanceof \stdClass ? $this->integrations = new \InfobipSDK\DTOs\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamIntegrationsV2($value) : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'middleName' => is_string($value) ? $this->middleName = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'modifiedFrom' => is_string($value) ? $this->modifiedFrom = \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin::from($value) : parent::assignMember($name, $value),
            'origin' => is_string($value) ? $this->origin = \InfobipSDK\Enums\Bd4ede8ed45be5abed1981f01dd3d5e59730966bed7e4695994e920454030b86\IamOrigin::from($value) : parent::assignMember($name, $value),
            'preferredLanguage' => is_string($value) ? $this->preferredLanguage = $value : parent::assignMember($name, $value),
            'profilePicture' => is_string($value) ? $this->profilePicture = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\A8ed60f1ed4abc0dfe4d5460edd3205f89585f2cd4b436e4d83a1231d28c264c\IamTypeV2::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
