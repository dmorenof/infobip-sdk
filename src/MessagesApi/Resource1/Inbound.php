<?php

declare(strict_types=1);

namespace InfobipSDK\MessagesApi\Resource1;

final class Inbound extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messages-api/1/inbound [operationId: get-messages-api-inbound-messages] */
    /**
     * Get inbound messages
     *
     * If you are unable to receive incoming messages to the endpoint of your choice in real-time, you can use this API call to fetch messages. Each request will return a batch of received messages, only once. The API request will only return new messages that arrived since the last API request.
     * Documentation: https://www.infobip.com/docs/messages-api
     */
    public static function get(\InfobipSDK\GetParams\MessagesApi\Resource1\Inbound $params): \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiIncomingMessageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\MessagesApi\Resource1\Inbound::class)->get($params);
    }
}
