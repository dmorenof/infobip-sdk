<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f;

/**
 * OAuthApiException
 */
final class OAuthApiException extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Deprecated, use requestError field instead. Shows error message.
     */
    public string $error;
    public \InfobipSDK\DTOs\Api\RequestError $requestError;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            'requestError' => $value instanceof \stdClass ? $this->requestError = new \InfobipSDK\DTOs\Api\RequestError($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
