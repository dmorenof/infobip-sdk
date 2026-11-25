<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1\Inbox;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/1/inbox/reports [operationId: receive-push-messages] */
    /**
     * Receive MO Push messages
     *
     * Get MO (Mobile Originated) Push messages that have been received by the Infobip platform from your subscribers' devices. These are incoming messages sent from devices to your application, not messages sent from the platform to devices. Each request will return a batch of received messages - only once. The following request will return the next batch of messages.
     */
    public static function get(?\InfobipSDK\GetParams\Push\Resource1\Inbox\Reports $params = null): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\MoReportsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Inbox\Reports::class)->get($params);
    }

}
