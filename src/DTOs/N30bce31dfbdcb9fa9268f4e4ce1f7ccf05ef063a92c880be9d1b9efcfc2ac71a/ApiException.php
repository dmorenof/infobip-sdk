<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N30bce31dfbdcb9fa9268f4e4ce1f7ccf05ef063a92c880be9d1b9efcfc2ac71a;

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
