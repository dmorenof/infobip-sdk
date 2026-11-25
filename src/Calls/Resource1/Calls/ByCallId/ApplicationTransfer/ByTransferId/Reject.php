<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId;

final class Reject extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/application-transfer/{transferId}/reject [operationId: application-transfer-reject] */
    /**
     * Reject application transfer
     *
     * Reject application transfer.
     */
    public static function post(\InfobipSDK\PathParams\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId\Reject $identifier): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId\Reject::class)->post($identifier);
    }

}
