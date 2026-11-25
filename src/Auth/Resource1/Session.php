<?php

declare(strict_types=1);

namespace InfobipSDK\Auth\Resource1;

final class Session extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /auth/1/session [operationId: destroy-session] */
    /**
     * Destroy session token
     *
     * This method allows you to destroy the session token.
     */
    public static function delete(): void
    {
        self::client()->resource(\InfobipSDK\Resources\Auth\Resource1\Session::class)->delete();
    }

    /** POST /auth/1/session [operationId: create-session] */
    /**
     * Create session token
     *
     * This method allows you to <a href="https://www.infobip.com/docs/essentials/api-authentication#ibsso-token-header">create a session (login)</a> which by default will expire after 60 minutes. If you want to create a new token before the session expires, you'll need to <a href="#platform-connectivity/account-management/destroy-session">destroy it</a> first.
     */
    public static function post(\InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateSessionRequest $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Session
    {
        return self::client()->resource(\InfobipSDK\Resources\Auth\Resource1\Session::class)->post($payload);
    }

}
