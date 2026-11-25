<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * BulkInfo
 */
final class BulkInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bulkId',
    'sendAt',
];

    /**
     * The ID that uniquely identifies the message within the bulk.
     */
    public string $bulkId;
    /**
     * Date and time when the email is to be sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2021-01-02T01:00:00.123Z"
     * Format: date-time
     */
    public string $sendAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
