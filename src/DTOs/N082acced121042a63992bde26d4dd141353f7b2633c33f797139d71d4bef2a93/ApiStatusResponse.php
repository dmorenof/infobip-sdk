<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * ApiStatusResponse
 */
final class ApiStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'status',
];

    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
