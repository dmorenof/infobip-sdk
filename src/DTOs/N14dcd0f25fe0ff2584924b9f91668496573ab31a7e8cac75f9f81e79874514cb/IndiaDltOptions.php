<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

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

    /**
     * Registered DLT content template ID which matches message you are sending.
     */
    public string $contentTemplateId;
    /**
     * Your assigned DLT principal entity ID.
     */
    public string $principalEntityId;
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
