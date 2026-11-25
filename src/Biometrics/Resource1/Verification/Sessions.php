<?php

declare(strict_types=1);

namespace InfobipSDK\Biometrics\Resource1\Verification;

final class Sessions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /biometrics/1/verification/sessions [operationId: delete-biometrics-verification-session] */
    /**
     * Abort Verification Session
     *
     * This function is used to abort the session. Use `sessionId` received in the [Create Verification Session](#platform-connectivity/biometrics/create-biometrics-verification-session) response.
     */
    public static function delete(\InfobipSDK\DeleteParams\Biometrics\Resource1\Verification\Sessions $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Verification\Sessions::class)->delete($params);
    }

    /** GET /biometrics/1/verification/sessions [operationId: get-biometrics-verification-session] */
    /**
     * Get Verification Session
     *
     * This function is used to retrieve a session by `sessionId` received in the [Create Verification Session](#platform-connectivity/biometrics/create-biometrics-verification-session) response.
     */
    public static function get(\InfobipSDK\GetParams\Biometrics\Resource1\Verification\Sessions $params): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GetSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Verification\Sessions::class)->get($params);
    }

    /** POST /biometrics/1/verification/sessions [operationId: create-biometrics-verification-session] */
    /**
     * Create Verification Session
     *
     * This function is used to initiate a session. It is the very first step for Verification application.
     */
    public static function post(\InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\VerificationSessionRequest $payload): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\CreatedSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Verification\Sessions::class)->post($payload);
    }

}
