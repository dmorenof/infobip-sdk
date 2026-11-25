<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource2\Text;

final class Advanced extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /sms/2/text/advanced [operationId: send-sms-message] */
    /**
     * Send SMS message
     *
     * Use this endpoint to send an SMS and set up a rich set of features, such as batch sending with a single API request, scheduling, URL tracking, language and transliteration configuration, etc. The API response will not contain the final delivery status, use [Delivery Reports](https://www.infobip.com/docs/api/channels/sms/sms-messaging/logs-and-status-reports/receive-outbound-sms-message-report) instead.\
     * In light of improved features, this endpoint has been superseded. Please visit [Send SMS message](#channels/sms/send-sms-messages) for the next version.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function post(\InfobipSDK\DTOs\N1612e6f124bb6c5b1f4f7b12ca64104d59fdfdf779c97454e478b219583b9d48\SMSAdvancedTextualRequest $payload): \InfobipSDK\DTOs\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource2\Text\Advanced::class)->post($payload);
    }

}
