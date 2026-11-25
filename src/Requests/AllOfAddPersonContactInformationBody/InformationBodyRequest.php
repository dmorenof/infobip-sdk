<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfAddPersonContactInformationBody;

final class InformationBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contactInformation',
    ];

    /**
     * Person's contact information
     */
    public \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2 $contactInformation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contactInformation' => $value instanceof \stdClass ? $this->contactInformation = new \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
