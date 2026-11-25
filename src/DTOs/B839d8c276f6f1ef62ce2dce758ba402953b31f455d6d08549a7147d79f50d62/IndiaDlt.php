<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * IndiaDlt
 *
 * Distributed Ledger Technology (DLT) specific parameters required for sending SMS to phone numbers registered in India.
 */
final class IndiaDlt extends \Dmorenof\SdkRuntime\DTO
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentTemplateId' => is_string($value) ? $this->contentTemplateId = $value : parent::assignMember($name, $value),
            'principalEntityId' => is_string($value) ? $this->principalEntityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
