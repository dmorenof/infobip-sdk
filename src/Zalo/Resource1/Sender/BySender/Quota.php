<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource1\Sender\BySender;

final class Quota extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /zalo/1/sender/{sender}/quota [operationId: get-zalo-quota] */
    /**
     * Get Zalo quota
     *
     * Returns the quota (number) of Zalo notifications sent per day.
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\QuotaInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\Quota::class)->get($sender);
    }

}
