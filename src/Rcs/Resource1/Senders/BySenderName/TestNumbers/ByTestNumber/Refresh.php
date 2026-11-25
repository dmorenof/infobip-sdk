<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber;

final class Refresh extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /rcs/1/senders/{senderName}/test-numbers/{testNumber}/refresh [operationId: refresh-rcs-test-number] */
    /**
     * Refresh RCS test number
     *
     * Status of RCS test number is automatically refreshed for 24 hours after it was added. If user does not accept invitation to become a tester in that period, test number will be marked as EXPIRED. Use this endpoint in order to start new 24 hours cycle in which system will periodically check if user has accepted to become a tester.
     */
    public static function put(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber\Refresh $identifier): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberRequestAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber\Refresh::class)->put($identifier);
    }
}
