<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f;

/**
 * StatusCodeResponse
 */
final class StatusCodeResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $message;
    public \InfobipSDK\Enums\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\StatusCode $statusCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'statusCode' => is_string($value) ? $this->statusCode = \InfobipSDK\Enums\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f\StatusCode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
