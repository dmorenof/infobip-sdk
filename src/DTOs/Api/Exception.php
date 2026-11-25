<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api;

/**
 * ApiException
 */
final class Exception extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Api\RequestError $requestError;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestError' => $value instanceof \stdClass ? $this->requestError = new \InfobipSDK\DTOs\Api\RequestError($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
