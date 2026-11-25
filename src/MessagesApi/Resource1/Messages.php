<?php

declare(strict_types=1);

namespace InfobipSDK\MessagesApi\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /messages-api/1/messages [operationId: send-messages-api-message] */
    /**
     * Send a Messages API message
     *
     * Send messages at scale through multiple channels, utilizing various message types.
     * Documentation: https://www.infobip.com/docs/messages-api
     */
    public static function post(\InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiRequest $payload): \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\MessagesApi\Resource1\Messages::class)->post($payload);
    }

}
