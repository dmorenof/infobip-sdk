<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * Camara Error Response
 *
 * Camara API error response for permission denied requests.
 */
final class CamaraPermissionDeniedErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'status' => [
        'format' => 'int32',
    ],
];

    /**
     * Error code.
     * Example: "PERMISSION_DENIED"
     */
    public string $code;
    /**
     * Detailed error message.
     * Example: "Client does not have sufficient permissions to perform this action"
     */
    public string $message;
    /**
     * HTTP status code.
     * Example: 403
     * Format: int32
     */
    public int $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
