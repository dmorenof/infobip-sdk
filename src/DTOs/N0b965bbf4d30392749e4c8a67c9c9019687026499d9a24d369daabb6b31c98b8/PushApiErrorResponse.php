<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * PushApiErrorResponse
 */
final class PushApiErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errorCode',
        'errorMessage',
    ];

    protected const array VALIDATION = [
        'errorCode' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Format: int32
     */
    public int $errorCode {
        set {
            $this->assigning('errorCode', $value);
            $this->errorCode = $value;
        }
    }
    public string $errorMessage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errorCode' => is_int($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'errorMessage' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
