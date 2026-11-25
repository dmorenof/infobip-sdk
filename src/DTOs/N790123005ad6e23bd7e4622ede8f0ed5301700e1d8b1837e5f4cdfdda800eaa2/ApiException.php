<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N790123005ad6e23bd7e4622ede8f0ed5301700e1d8b1837e5f4cdfdda800eaa2;

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
