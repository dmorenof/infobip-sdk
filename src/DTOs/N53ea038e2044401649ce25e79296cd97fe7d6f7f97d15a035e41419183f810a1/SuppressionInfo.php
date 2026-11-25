<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1;

/**
 * SuppressionInfo
 *
 * Suppression get response.
 */
final class SuppressionInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdDate',
    'domainName',
    'emailAddress',
    'reason',
    'type',
];

    /**
     * Date and time when email address was suppressed.
     * Format: date-time
     */
    public string $createdDate;
    /**
     * Name of the requested domain.
     */
    public string $domainName;
    /**
     * Email address that is suppressed.
     */
    public string $emailAddress;
    /**
     * Reason for suppression.
     */
    public string $reason;
    /**
     * Type of suppression.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdDate' => is_string($value) ? $this->createdDate = $value : parent::assignMember($name, $value),
            'domainName' => is_string($value) ? $this->domainName = $value : parent::assignMember($name, $value),
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
