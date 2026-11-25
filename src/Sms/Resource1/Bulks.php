<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1;

final class Bulks extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/1/bulks [operationId: get-scheduled-sms-messages] */
    /**
     * Get scheduled SMS messages
     *
     * See all [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms) and their scheduled date and time. To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function get(\InfobipSDK\GetParams\Sms\Resource1\Bulks $params): \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Bulks::class)->get($params);
    }

    /** PUT /sms/1/bulks [operationId: reschedule-sms-messages] */
    /**
     * Reschedule SMS messages
     *
     * Change the date and time of already [scheduled messages](https://www.infobip.com/docs/sms/sms-over-api#schedule-sms). To schedule a message, use the `sendAt` field when [sending a message](#channels/sms/sms-messaging/outbound-sms/send-sms-messages).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function put(\InfobipSDK\PutParams\Sms\Resource1\Bulks $params): \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Bulks::class)->put($params);
    }

}
