<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors;

final class Status500Variant5Response extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto $error;
    /**
     * Verification result.
     */
    public \InfobipSDK\Enums\Errors\Status500Variant5\Status500Variant5ResultEnum $result;
    /**
     * Unique request ID. The whole flow from the request to response has same token so it can be used for debugging in case of error or matching API request with the callback webhook response.
     * Example: "123e4567-e89b-12d3-a456-426655440000"
     * Format: uuid
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto($value) : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = \InfobipSDK\Enums\Errors\Status500Variant5\Status500Variant5ResultEnum::from($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
