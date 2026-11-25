<?php

declare(strict_types=1);

namespace InfobipSDK\Biometrics\Resource1\Enrollment;

final class Sessions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /biometrics/1/enrollment/sessions [operationId: delete-biometrics-enrollment-session] */
    /**
     * Abort Enrollment Session
     *
     * This function is used to abort the session. Use `sessionId` received in the [Create Enrollment Session](#platform-connectivity/biometrics/create-biometrics-enrollment-session) response.
     */
    public static function delete(\InfobipSDK\DeleteParams\Biometrics\Resource1\Enrollment\Sessions $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Enrollment\Sessions::class)->delete($params);
    }

    /** GET /biometrics/1/enrollment/sessions [operationId: get-biometrics-enrollment-session] */
    /**
     * Get Enrollment Session
     *
     * This function is used to retrieve a session by `sessionId` received in the [Create Enrollment Session](#platform-connectivity/biometrics/create-biometrics-enrollment-session) response.
     */
    public static function get(\InfobipSDK\GetParams\Biometrics\Resource1\Enrollment\Sessions $params): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GetSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Enrollment\Sessions::class)->get($params);
    }

    /** POST /biometrics/1/enrollment/sessions [operationId: create-biometrics-enrollment-session] */
    /**
     * Create Enrollment Session
     *
     * This function is used to initiate a session. It is the very first step for Enrollment application.
     */
    public static function post(\InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\EnrollmentSessionRequest $payload): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\CreatedSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Enrollment\Sessions::class)->post($payload);
    }
}
