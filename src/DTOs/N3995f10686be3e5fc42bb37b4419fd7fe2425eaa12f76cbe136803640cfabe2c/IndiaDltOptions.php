<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * IndiaDltOptions
 *
 * Distributed Ledger Technology (DLT) specific parameters required for sending SMS to phone numbers registered in India.
 */
final class IndiaDltOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'principalEntityId',
];

    protected const array VALIDATION = [
    'principalEntityId' => [
        'minLength' => 1,
    ],
];

    /**
     * Registered DLT content template ID which matches message you are sending.
     */
    public string $contentTemplateId;
    /**
     * Your assigned DLT principal entity ID.
     */
    public string $principalEntityId {
        set {
            $this->assigning('principalEntityId', $value);
            $this->principalEntityId = $value;
        }
    }
    /**
     * Your assigned Telemarketer ID. (required for Aggregators)
     */
    public string $telemarketerId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentTemplateId' => is_string($value) ? $this->contentTemplateId = $value : parent::assignMember($name, $value),
            'principalEntityId' => is_string($value) ? $this->principalEntityId = $value : parent::assignMember($name, $value),
            'telemarketerId' => is_string($value) ? $this->telemarketerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
