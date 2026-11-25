<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\RinglessVoicemail\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/ringless-voicemail/1/reports [operationId: get-ringless-voicemail-reports] */
    /**
     * Get ringless voicemail delivery reports
     *
     * If you are unable to receive real-time message delivery reports towards your endpoint for various reasons, use this endpoint to fetch batches of message reports to confirm whether specific messages have been delivered. Each request returns batches of the latest message reports. The API returns each report only once — if the message status changes again after retrieval, the endpoint returns a new report for the updated status on the next request.
     *
     * Reports can be filtered by a single messageId or bulkId, or fetched in bulk up to the given limit. If both are given, messageId takes priority. You can only access reports for the last 48h.
     */
    public static function get(?\InfobipSDK\GetParams\Voice\RinglessVoicemail\Resource1\Reports $params = null): \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\RinglessVoicemail\Resource1\Reports::class)->get($params);
    }
}
