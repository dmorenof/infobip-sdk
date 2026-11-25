<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Transfer;

final class Queues extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/transfer/queues [operationId: get-transfer-queues] */
    /**
     * Fetch queues eligible as transfer destination
     *
     * This method retrieves a list of all queues and returns them along with their current activity status. The activity status indicates whether or not a queue is currently inside of working hours. The list of queues and their activity can be used to determine which queues are currently able to receive incoming transfer requests. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-queue-agent-guide" target="_blank">More info</a>.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Voice\Resource2\Transfer\Queues $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\PageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Transfer\Queues::class)->get($params);
    }

}
