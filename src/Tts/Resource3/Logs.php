<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tts/3/logs [operationId: get-sent-voice-logs] */
    /**
     * Get sent Voice logs
     *
     * This method allows you to get logs of sent Voice messages. Voice logs are available for the last 48 hours!
     */
    public static function get(?\InfobipSDK\GetParams\Tts\Resource3\Logs $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\LogsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Logs::class)->get($params);
    }
}
