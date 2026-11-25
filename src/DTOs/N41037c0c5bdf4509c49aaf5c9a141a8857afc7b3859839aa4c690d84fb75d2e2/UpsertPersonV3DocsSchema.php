<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * UpsertPersonV3DocsSchema
 */
final class UpsertPersonV3DocsSchema extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'address' => [
            'minLength' => 0,
            'maxLength' => 256,
        ],
        'city' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'country' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'externalId' => [
            'minLength' => 0,
            'maxLength' => 256,
        ],
        'firstName' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'lastName' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'middleName' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'nickName' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'profilePicture' => [
            'minLength' => 0,
            'maxLength' => 2083,
        ],
        'tags' => [
            'uniqueItems' => true,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'computedAttributes',
        'createdAt',
        'createdBy',
        'id',
        'modifiedAt',
        'modifiedBy',
    ];

    /**
     * Person's address, 256 characters max.
     * Example: "67 Farringdon Road"
     */
    public string $address {
        set {
            $this->assigning('address', $value);
            $this->address = $value;
        }
    }
    /**
     * Person's date of birth, format `YYYY-MM-DD`.
     * Example: "1966-01-15"
     * Format: date
     */
    public string $birthDate;
    /**
     * Person's city, 50 characters max.
     * Example: "London"
     */
    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Person's computed attributes grouped by type.
     * Example: {"fullName":"Jane Smith"}
     */
    public \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertPersonV3DocsSchema\ComputedAttributesMap $computedAttributes;
    /**
     * List of phones, emails and other information how a person can be contacted.
     */
    public \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertPersonV3DocsSchema\ContactInformationCollection $contactInformation;
    /**
     * Person's country, 50 characters max.
     * Example: "United Kingdom"
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Date and time of creation. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Identifier of the user who created this person record.
     * Example: "5"
     */
    public string $createdBy;
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\OriginV3 $createdFrom;
    /**
     * List of custom attributes for the person, 4096 characters max per value.
     * Example: {"Contract Expiry":"2024-06-12","Company":"ACME"}
     */
    public \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertPersonV3DocsSchema\CustomAttributesMap $customAttributes;
    /**
     * Unique ID for a person from your or another external system, 256 characters max.
     * Example: "3"
     */
    public string $externalId {
        set {
            $this->assigning('externalId', $value);
            $this->externalId = $value;
        }
    }
    /**
     * Person's first name, 255 characters max.
     * Example: "Jane"
     */
    public string $firstName {
        set {
            $this->assigning('firstName', $value);
            $this->firstName = $value;
        }
    }
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonGenderV3 $gender;
    /**
     * Unique id of the entity.
     * Example: 1
     * Format: int64
     */
    public int $id;
    /**
     * Person's last name, 255 characters max.
     * Example: "Smith"
     */
    public string $lastName {
        set {
            $this->assigning('lastName', $value);
            $this->lastName = $value;
        }
    }
    /**
     * Person's middle name, 50 characters max.
     * Example: "Janie"
     */
    public string $middleName {
        set {
            $this->assigning('middleName', $value);
            $this->middleName = $value;
        }
    }
    /**
     * Date and time of last modification. Has the following format: yyyy-MM-dd'T'HH:mm:ss.
     * Format: date-time
     */
    public string $modifiedAt;
    /**
     * Identifier of the user who last modified this person record.
     * Example: "5"
     */
    public string $modifiedBy;
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\OriginV3 $modifiedFrom;
    /**
     * Person's nick name, 50 characters max.
     * Example: "Janey"
     */
    public string $nickName {
        set {
            $this->assigning('nickName', $value);
            $this->nickName = $value;
        }
    }
    /**
     * Person's preferred language. Must be in two letter ISO (xx) or language-region BCP-47 (xx-YY) format.
     * Example: "en-gb"
     */
    public string $preferredLanguage;
    /**
     * URL for the person's profile picture, 2083 characters max.
     * Example: "http://profile.com"
     * Format: url
     */
    public string $profilePicture {
        set {
            $this->assigning('profilePicture', $value);
            $this->profilePicture = $value;
        }
    }
    /**
     * List of tags that this person has.
     * Example: ["tag1","tag2"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $tags {
        set {
            $this->assigning('tags', $value);
            $this->tags = $value;
        }
    }
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonTypeV3 $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'birthDate' => is_string($value) ? $this->birthDate = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'contactInformation' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contactInformation = new \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertPersonV3DocsSchema\ContactInformationCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertContactInformationV3DocsSchema::class)) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'createdBy' => is_string($value) ? $this->createdBy = $value : parent::assignMember($name, $value),
            'createdFrom' => is_string($value) ? $this->createdFrom = \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\OriginV3::from($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonGenderV3::from($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'middleName' => is_string($value) ? $this->middleName = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'modifiedBy' => is_string($value) ? $this->modifiedBy = $value : parent::assignMember($name, $value),
            'modifiedFrom' => is_string($value) ? $this->modifiedFrom = \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\OriginV3::from($value) : parent::assignMember($name, $value),
            'nickName' => is_string($value) ? $this->nickName = $value : parent::assignMember($name, $value),
            'preferredLanguage' => is_string($value) ? $this->preferredLanguage = $value : parent::assignMember($name, $value),
            'profilePicture' => is_string($value) ? $this->profilePicture = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonTypeV3::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
