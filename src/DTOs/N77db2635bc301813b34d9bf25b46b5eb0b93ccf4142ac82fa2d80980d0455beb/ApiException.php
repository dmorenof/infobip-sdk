<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N77db2635bc301813b34d9bf25b46b5eb0b93ccf4142ac82fa2d80980d0455beb;

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
