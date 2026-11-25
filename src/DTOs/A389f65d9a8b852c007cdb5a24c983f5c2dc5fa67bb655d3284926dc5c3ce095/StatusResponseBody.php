<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095;

/**
 * StatusResponseBody
 */
final class StatusResponseBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requestId',
        'status',
    ];

    protected const array READ_ONLY_FIELDS = [
        'message',
        'requestId',
    ];

    /**
     * Completion message of data export request, if applicable.
     */
    public string $message;
    /**
     * Request ID of the data export request, the status of which is being queried on the [GET status](#customer-engagement/people/get-events-export-request-status) endpoint.
     */
    public string $requestId;
    public \InfobipSDK\Enums\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\RequestStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\RequestStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
