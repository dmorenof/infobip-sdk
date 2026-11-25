<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba;

/**
 * BulkResponse
 *
 * Bulk response object.
 */
final class BulkResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique ID of the bulk.
     */
    public string $bulkId;
    /**
     * Timestamp when bulk is scheduled.
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
