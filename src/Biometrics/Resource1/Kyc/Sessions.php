<?php

declare(strict_types=1);

namespace InfobipSDK\Biometrics\Resource1\Kyc;

final class Sessions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /biometrics/1/kyc/sessions [operationId: delete-biometrics-kyc-session] */
    /**
     * Abort KYC Session
     *
     * This function is used to abort the session. Use `sessionId` received in the [Create KYC Session](#platform-connectivity/biometrics/create-biometrics-kyc-session) response.
     */
    public static function delete(\InfobipSDK\DeleteParams\Biometrics\Resource1\Kyc\Sessions $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Kyc\Sessions::class)->delete($params);
    }

    /** GET /biometrics/1/kyc/sessions [operationId: get-biometrics-kyc-session] */
    /**
     * Get KYC Session
     *
     * This function is used to retrieve a session by `sessionId` received in the [Create KYC Session](#platform-connectivity/biometrics/create-biometrics-kyc-session) response.
     */
    public static function get(\InfobipSDK\GetParams\Biometrics\Resource1\Kyc\Sessions $params): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GetSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Kyc\Sessions::class)->get($params);
    }

    /** POST /biometrics/1/kyc/sessions [operationId: create-biometrics-kyc-session] */
    /**
     * Create KYC Session
     *
     * This function is used to initiate a session. It is the very first step for KYC application.
     */
    public static function post(\InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\KycSessionRequest $payload): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\CreatedSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Kyc\Sessions::class)->post($payload);
    }
}
