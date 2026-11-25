<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1\Bulks;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/1/bulks/status [operationId: get-scheduled-sms-messages-status] */
    /**
     * Get scheduled SMS messages status
     *
     * See the status of [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms). To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function get(\InfobipSDK\GetParams\Sms\Resource1\Bulks\Status $params): \InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\BulkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Bulks\Status::class)->get($params);
    }

    /** PUT /sms/1/bulks/status [operationId: update-scheduled-sms-messages-status] */
    /**
     * Update scheduled SMS messages status
     *
     * Change the status or completely cancel sending of [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms). To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function put(\InfobipSDK\PutParams\Sms\Resource1\Bulks\Status $params): \InfobipSDK\DTOs\B28487c847ed2327e816f04e75efdaf507ffcf1d938d91963e2ce7298453183f\BulkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Bulks\Status::class)->put($params);
    }
}
