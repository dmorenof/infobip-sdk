<?php

declare(strict_types=1);

namespace InfobipSDK\Auth\Resource1\Oauth2;

final class Token extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /auth/1/oauth2/token [operationId: create-oauth2-token] */
    /**
     * Create OAuth2 token
     *
     * Generate OAuth2 access token that can later on be used to authenticate other Infobip API calls.
     */
    public static function post(?\InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\TokenRequest $payload = null): \InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\TokenResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Auth\Resource1\Oauth2\Token::class)->post($payload);
    }

}
