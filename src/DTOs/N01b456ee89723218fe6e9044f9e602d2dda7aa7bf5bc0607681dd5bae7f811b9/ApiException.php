<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N01b456ee89723218fe6e9044f9e602d2dda7aa7bf5bc0607681dd5bae7f811b9;

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
