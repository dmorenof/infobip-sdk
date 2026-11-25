<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3;

/**
 * TokenResponseModel
 */
final class TokenResponseModel extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time point until which token is valid. The default value is 8h. If it expires, the user must be provided with the new valid token in order to continue using Infobip WebRTC platform. There is no notification about token expiry, you must track that by yourself.
     * Example: "2022-05-01T14:25:55.123Z"
     */
    public string $expirationTime;
    /**
     * The access token used to connect client SDKs to Infobip WebRTC platform.
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expirationTime' => is_string($value) ? $this->expirationTime = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
