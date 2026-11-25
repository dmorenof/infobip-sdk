<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657;

/**
 * RequestDetailsResponse
 *
 * Details about user request status.
 */
final class RequestDetailsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'status',
    ];

    protected const array VALIDATION = [
        'errorCode' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Account identifier.
     */
    public string $account;
    /**
     * Error code.
     * Format: int32
     */
    public int $errorCode {
        set {
            $this->assigning('errorCode', $value);
            $this->errorCode = $value;
        }
    }
    /**
     * Error message.
     */
    public string $errorMessage;
    public \InfobipSDK\Enums\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\StatusResponse $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'errorCode' => is_int($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'errorMessage' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\StatusResponse::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
