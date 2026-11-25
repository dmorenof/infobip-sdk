<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7;

/**
 * ErrorResponse
 *
 * Error response object.
 */
final class ErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Details of the error, if the request fails.
     */
    public string $errorDetails;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errorDetails' => is_string($value) ? $this->errorDetails = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
