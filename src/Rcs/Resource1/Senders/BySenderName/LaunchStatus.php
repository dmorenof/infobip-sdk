<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySenderName;

final class LaunchStatus extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/senders/{senderName}/launch-status [operationId: get-rcs-sender-launch-status] */
    /**
     * Get RCS sender launch status
     *
     * Get detailed launch status information for an RCS sender, including coverage details by country and provider. This endpoint provides granular information about the launch progress across different carriers and regions.
     */
    public static function get(string $senderName): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderLaunchStatusEvent
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\LaunchStatus::class)->get($senderName);
    }
}
