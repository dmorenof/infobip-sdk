<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1\Inbox;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/1/inbox/reports [operationId: get-inbound-sms-messages] */
    /**
     * Get inbound SMS messages
     *
     * If you are unable to receive incoming SMS to the endpoint of your choice in real-time, you can use this API call to fetch messages. Each request will return a batch of received messages, only once. The API request will only return new messages that arrived since the last API request. To use this method, you’d need to:<ol><li><a href="https://www.infobip.com/docs/api/platform/numbers/phone-numbers/purchase-number">Buy a number</a> capable of receiving SMS traffic.</li><li>Specify a forwarding endpoint for the number and optionally configure other <a href="https://www.infobip.com/docs/api/platform/numbers/my-numbers/resource-management/manage-inbound-configuration">inbound settings</a>.</li></ol>
     */
    public static function get(?\InfobipSDK\GetParams\Sms\Resource1\Inbox\Reports $params = null): \InfobipSDK\DTOs\Cd5e571e477c0b81ca50ad592cf9f67cc32feded2012ec26d7fae09c0c2d5108\SmsMoReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Inbox\Reports::class)->get($params);
    }

}
