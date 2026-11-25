<?php

declare(strict_types=1);

namespace InfobipSDK\Tts\Resource3\Bulks;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tts/3/bulks/status [operationId: get-sent-bulks-status] */
    /**
     * Get sent bulk's status
     *
     * This method allows you to get status of scheduled TTS bulk.
     */
    public static function get(\InfobipSDK\GetParams\Tts\Resource3\Bulks\Status $params): \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Bulks\Status::class)->get($params);
    }

    /** PUT /tts/3/bulks/status [operationId: manage-sent-bulks-status] */
    /**
     * Manage sent bulk's status
     *
     * This method allows you to manage statuses of scheduled TTS bulk. Messages scheduled with the sendAt or sending speed parameter can be paused, resumed or canceled by changing the message status, or rescheduled using the bulkId parameter as an identifier. Only voice messages that were not already sent can be canceled.
     */
    public static function put(\InfobipSDK\PutParams\Tts\Resource3\Bulks\Status $params): \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Tts\Resource3\Bulks\Status::class)->put($params);
    }
}
