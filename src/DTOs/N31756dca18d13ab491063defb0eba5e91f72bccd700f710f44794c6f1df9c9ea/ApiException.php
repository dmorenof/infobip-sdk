<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea;

/**
 * ApiException
 */
final class ApiException extends \Dmorenof\SdkRuntime\DTO
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
