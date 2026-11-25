<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095;

/**
 * ExportResponseBody
 */
final class ExportResponseBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requestId',
    ];

    protected const array READ_ONLY_FIELDS = [
        'requestId',
    ];

    /**
     * Event export request ID.
     */
    public string $requestId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
