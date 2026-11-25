<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId;

final class Accept extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/application-transfer/{transferId}/accept [operationId: application-transfer-accept] */
    /**
     * Accept application transfer
     *
     * Accept application transfer.
     */
    public static function post(\InfobipSDK\PathParams\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId\Accept $identifier): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId\Accept::class)->post($identifier);
    }

}
