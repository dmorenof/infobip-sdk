<?php

declare(strict_types=1);

namespace InfobipSDK\MessagesApi\Resource1\Messages;

final class Validate extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /messages-api/1/messages/validate [operationId: validate-messages-api-message] */
    /**
     * Validate a Messages API message
     *
     * Perform a detailed validation of Messages API messages. This endpoint executes more specific checks than the `/messages` endpoint such as: possible channel-specific validations, verification of each failover step and unknown fields. Returns `200 OK` when the request would be accepted by the platform or `400 BAD_REQUEST` when it may fail at any point. Use this endpoint to validate messages before sending them to catch potential issues early.
     * Documentation: https://www.infobip.com/docs/messages-api
     */
    public static function post(?\InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiRequest $payload = null): \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidationOkResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\MessagesApi\Resource1\Messages\Validate::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\MessagesApi\Resource1\Messages\Validate::class)->post($payload);
    }
}
