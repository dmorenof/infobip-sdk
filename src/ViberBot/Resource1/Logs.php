<?php

declare(strict_types=1);

namespace InfobipSDK\ViberBot\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /viber-bot/1/logs [operationId: get-outbound-viber-bot-message-logs] */
    /**
     * Get outbound Viber bot message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\ViberBot\Resource1\Logs $params = null): \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\LogResponseLogViberBotOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\ViberBot\Resource1\Logs::class)->get($params);
    }

}
