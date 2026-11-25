<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

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
     * Id of your registered DTL content template that matches this message's text.
     */
    public string $contentTemplateId;
    /**
     * Your assigned DTL principal entity id.
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
