<?php

declare(strict_types=1);

namespace InfobipSDK\Mms\Resource1\Inbox;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /mms/1/inbox/reports [operationId: get-inbound-mms-messages] */
    /**
     * Get inbound MMS messages
     *
     * If for some reason you are unable to receive incoming MMS at the endpoint of your choice in real time, you can use this API call to fetch messages. Each request will return a batch of received messages - only once. The following API request will return only new messages that arrived since the last API request.
     */
    public static function get(?\InfobipSDK\GetParams\Mms\Resource1\Inbox\Reports $params = null): \InfobipSDK\DTOs\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Mms\Resource1\Inbox\Reports::class)->get($params);
    }

}
