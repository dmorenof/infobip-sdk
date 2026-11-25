<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

/**
 * BulkResponse
 *
 * Validations response
 */
final class BulkResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'validationRequestId',
    ];

    /**
     * Unique identifier for the bulk email validation request. Provide your own or leave it blank to have one generated automatically.
     *
     */
    public string $validationRequestId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'validationRequestId' => is_string($value) ? $this->validationRequestId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
