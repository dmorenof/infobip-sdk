<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * StatusCodeResponse
 */
final class StatusCodeResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $message;
    public \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCode $statusCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'statusCode' => is_string($value) ? $this->statusCode = \InfobipSDK\Enums\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
