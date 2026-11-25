<?php

declare(strict_types=1);

namespace InfobipSDK\Biometrics\Resource1\Extraction;

final class Sessions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /biometrics/1/extraction/sessions [operationId: delete-biometrics-extraction-session] */
    /**
     * Abort Extraction Session
     *
     * This function is used to abort the session. Use `sessionId` received in the [Create Extraction Session](#platform-connectivity/biometrics/create-biometrics-extraction-session) response.
     */
    public static function delete(\InfobipSDK\DeleteParams\Biometrics\Resource1\Extraction\Sessions $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Extraction\Sessions::class)->delete($params);
    }

    /** GET /biometrics/1/extraction/sessions [operationId: get-biometrics-extraction-session] */
    /**
     * Get Extraction Session
     *
     * This function is used to retrieve a session by `sessionId` received in [Create Extraction Session](#platform-connectivity/biometrics/create-biometrics-extraction-session) response.
     */
    public static function get(\InfobipSDK\GetParams\Biometrics\Resource1\Extraction\Sessions $params): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GetSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Extraction\Sessions::class)->get($params);
    }

    /** POST /biometrics/1/extraction/sessions [operationId: create-biometrics-extraction-session] */
    /**
     * Create Extraction Session
     *
     * This function is used to initiate a session. It is the very first step for extraction application.
     */
    public static function post(\InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\ExtractionSessionRequest $payload): \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\CreatedSessionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Biometrics\Resource1\Extraction\Sessions::class)->post($payload);
    }

}
