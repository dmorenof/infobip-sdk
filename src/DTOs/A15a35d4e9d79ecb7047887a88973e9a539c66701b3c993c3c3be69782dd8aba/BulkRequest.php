<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba;

/**
 * BulkRequest
 *
 * Bulk request object.
 */
final class BulkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sendAt',
];

    /**
     * Rescheduled timestamp of the bulk.
     * Format: date-time
     */
    public string $sendAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
