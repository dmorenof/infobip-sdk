<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * IamPersonV2
 *
 * Person attributes. In case a person with either the specified <code>externalId</code> or <code>contactInformation</code> already exists in the People, the persons will be automatically merged. See <a href="https://www.infobip.com/docs/api/customer-engagement/moments/add-flow-participants" target="_blank">endpoint description</a> for more info.
 */
final class IamPersonV2 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'tags' => [
        'uniqueItems' => true,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'computedAttributes',
    'createdAt',
    'id',
    'modifiedAt',
];

    /**
     * Person's title, 50 characters max.
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
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamPersonV2\ComputedAttributesMap $computedAttributes;
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamPersonContactsV2 $contactInformation;
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
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamPersonV2\CustomAttributesMap $customAttributes;
    /**
     * Unique ID for a person from your or another external system, 256 characters max.
     */
    public string $externalId;
    /**
     * Person's first name, 255 characters max.
     */
    public string $firstName;
    public \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamGender $gender;
    /**
     * Unique id of the entity.
     * Format: int64
     */
    public int $id;
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamIntegrationsV2 $integrations;
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
    public \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\PublicIamOrigin $modifiedFrom;
    public \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\PublicIamOrigin $origin;
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
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $tags {
        set {
            $this->assigning('tags', $value);
            $this->tags = $value;
        }
    }
    public \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\PublicIamTypeV2 $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'birthDate' => is_string($value) ? $this->birthDate = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'contactInformation' => $value instanceof \stdClass ? $this->contactInformation = new \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamPersonContactsV2($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamGender::from($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'integrations' => $value instanceof \stdClass ? $this->integrations = new \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\IamIntegrationsV2($value) : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'middleName' => is_string($value) ? $this->middleName = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'modifiedFrom' => is_string($value) ? $this->modifiedFrom = \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\PublicIamOrigin::from($value) : parent::assignMember($name, $value),
            'origin' => is_string($value) ? $this->origin = \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\PublicIamOrigin::from($value) : parent::assignMember($name, $value),
            'preferredLanguage' => is_string($value) ? $this->preferredLanguage = $value : parent::assignMember($name, $value),
            'profilePicture' => is_string($value) ? $this->profilePicture = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\PublicIamTypeV2::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
