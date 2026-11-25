<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * StatusCodeResponse
 */
final class StatusCodeResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $message;
    public \InfobipSDK\Enums\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCode $statusCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'statusCode' => is_string($value) ? $this->statusCode = \InfobipSDK\Enums\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
