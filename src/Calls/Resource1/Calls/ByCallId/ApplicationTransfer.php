<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls\ByCallId;

final class ApplicationTransfer extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/calls/{callId}/application-transfer [operationId: application-transfer] */
    /**
     * Request application transfer
     *
     * Request application transfer.
     */
    public static function post(string $callId, \InfobipSDK\DTOs\Be917819c3f3f7072f44fe3d7909e7b833fe4857710e7f5ab585df108ef1ed5b\ApplicationTransferRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId\ApplicationTransfer::class)->post($callId, $payload);
    }
}
