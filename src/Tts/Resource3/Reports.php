<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tts/3/reports [operationId: get-voice-delivery-reports-deprecated] */
    /**
     * Get Voice Delivery Reports
     *
     * This version is deprecated as of July 1st 2020, meaning no fixes/updates will be provided and no new parameters will be added.
     *
     *
     * "We strongly advise you to update to new [delivery report method](https://www.infobip.com/docs/api/channels/voice/voice-reports-and-logs/get-voice-delivery-reports).
     *
     *
     * @deprecated
     */
    public static function get(?\InfobipSDK\GetParams\Tts\Resource3\Reports $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Reports::class)->get($params);
    }

}
