<?php

declare(strict_types=1);

namespace InfobipSDK\MessagesApi\Resource1;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /messages-api/1/events [operationId: send-messages-api-events] */
    /**
     * Send a Messages API event
     *
     * Send one or more events to multiple recipients.
     *
     * An event is an interaction with end-user's device which does not impact messaging content of conversation.
     *
     * Examples of events are: TYPING_STARTED, TYPING_STOPPED.
     * Documentation: https://www.infobip.com/docs/messages-api
     */
    public static function post(\InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiEventRequest $payload): \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\MessagesApi\Resource1\Events::class)->post($payload);
    }

}
