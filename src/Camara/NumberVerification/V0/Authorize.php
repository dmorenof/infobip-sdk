<?php

declare(strict_types=1);

namespace InfobipSDK\Camara\NumberVerification\V0;

final class Authorize extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /camara/number-verification/v0/authorize [operationId: authorize-number-verify] */
    /**
     * Number verify device authorization
     *
     * Use this method to redirect the mobile device on the MNO network for authorization, based on the mobile device IP address.
     * Upon authorization, the device is redirected back to the URL specified in `redirectUrl`.
     * When redirected back, a new query parameter `code` is being added.
     * It needs to be sent in a subsequent verify request to complete verification.
     *
     * **Error handling behavior:**
     * - When `redirectUrl` parameter **is provided**: All errors are returned as a 302 redirect back to the `redirectUrl` with OAuth 2.0 error query parameters (`error`, `error_description` (optional), `state`).
     * - When `redirectUrl` parameter **is NOT provided**: A JSON response is returned (see below).
     *
     */
    public static function get(\InfobipSDK\GetParams\Camara\NumberVerification\V0\Authorize $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\Camara\NumberVerification\V0\Authorize::class)->get($params);
    }

}
