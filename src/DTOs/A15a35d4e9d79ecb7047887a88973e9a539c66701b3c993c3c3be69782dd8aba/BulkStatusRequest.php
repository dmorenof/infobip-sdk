<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba;

/**
 * BulkStatusRequest
 *
 * Bulk status request object.
 */
final class BulkStatusRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'status',
];

    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\BulkStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\BulkStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
