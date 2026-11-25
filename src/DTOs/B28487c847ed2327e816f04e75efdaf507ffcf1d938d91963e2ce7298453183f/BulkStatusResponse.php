<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f;

/**
 * BulkStatusResponse
 */
final class BulkStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     */
    public string $bulkId;
    public \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\BulkStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\BulkStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
