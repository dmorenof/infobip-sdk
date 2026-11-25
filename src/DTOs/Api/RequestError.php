<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api;

/**
 * ApiRequestError
 */
final class RequestError extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Api\RequestErrorDetails $serviceException;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'serviceException' => $value instanceof \stdClass ? $this->serviceException = new \InfobipSDK\DTOs\Api\RequestErrorDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
