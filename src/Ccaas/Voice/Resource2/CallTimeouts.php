<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class CallTimeouts extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /ccaas/voice/2/call-timeouts [operationId: remove-conversations-call-timeout] */
    /**
     * Remove custom call timeout
     *
     * Use this method to remove the custom inbound call timeout configuration.
     *
     * @deprecated
     */
    public static function delete(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\CallTimeouts::class)->delete();
    }

    /** GET /ccaas/voice/2/call-timeouts [operationId: get-conversations-call-timeout] */
    /**
     * Get call timeout
     *
     * Use this method to retrieve call timeout configuration.
     */
    public static function get(): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\CallTimeoutApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\CallTimeouts::class)->get();
    }

    /** PUT /ccaas/voice/2/call-timeouts [operationId: update-conversations-call-timeout] */
    /**
     * Update call timeout
     *
     * Use this method to update call timeout configuration. Null field will resolve to default value.
     */
    public static function put(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\CallTimeoutApiModel $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\CallTimeoutApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\CallTimeouts::class)->put($payload);
    }

}
