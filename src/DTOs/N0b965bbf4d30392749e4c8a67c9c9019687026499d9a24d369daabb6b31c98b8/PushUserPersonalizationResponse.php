<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * PushUserPersonalizationResponse
 */
final class PushUserPersonalizationResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'tags' => [
        'uniqueItems' => true,
    ],
];

    /**
     * Format: date-time
     */
    public string $birthday;
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation $contactInformation;
    /**
     * Set of custom key-value pairs where value can be any of `string`, `number`, `boolean`
     */
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserPersonalizationResponse\CustomAttributesMap $customAttributes;
    /**
     * Id of a user in external system
     */
    public string $externalId;
    /**
     * User first name
     */
    public string $firstName;
    public \InfobipSDK\Enums\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiGender $gender;
    /**
     * User last name
     */
    public string $lastName;
    /**
     * User middle name
     */
    public string $middleName;
    /**
     * Set of string labels attached to the user
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $tags {
        set {
            $this->assigning('tags', $value);
            $this->tags = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'birthday' => is_string($value) ? $this->birthday = $value : parent::assignMember($name, $value),
            'contactInformation' => $value instanceof \stdClass ? $this->contactInformation = new \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\ContactInformation($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = \InfobipSDK\Enums\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiGender::from($value) : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'middleName' => is_string($value) ? $this->middleName = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
