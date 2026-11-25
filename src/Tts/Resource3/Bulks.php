<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3;

final class Bulks extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tts/3/bulks [operationId: get-sent-bulks] */
    /**
     * Get sent bulks
     *
     * This method will return information about the scheduled time for a unique bulk message. Canceling and rescheduling are supported only when the voice message request contains at least one message and the message bulkId is unique.
     */
    public static function get(\InfobipSDK\GetParams\Tts\Resource3\Bulks $params): \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Bulks::class)->get($params);
    }

    /** PUT /tts/3/bulks [operationId: reschedule-sent-bulk] */
    /**
     * Reschedule sent bulk
     *
     * This method allows you to reschedule scheduled TTS bulk. Messages scheduled with the sendAt or Sending speed parameter can be paused, resumed or canceled by changing the message status, or rescheduled using the bulkId parameter as an identifier. Rescheduling is only possible if the bulk status is PAUSED.
     */
    public static function put(\InfobipSDK\PutParams\Tts\Resource3\Bulks $params): \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Bulks::class)->put($params);
    }

}
