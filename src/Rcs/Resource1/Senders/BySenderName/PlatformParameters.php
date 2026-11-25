<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySenderName;

final class PlatformParameters extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /rcs/1/senders/{senderName}/platform-parameters [operationId: update-rcs-sender-platform-parameters] */
    /**
     * Update RCS sender platform parameters
     *
     * Update platform parameters associated with RCS sender. These parameters can be edited at any time, except when the sender is in PENDING status, in which case they cannot be edited.
     */
    public static function patch(string $senderName, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\EditPlatformParametersApiRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderRequestAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\PlatformParameters::class)->patch($senderName, $payload);
    }
}
