<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource2\Binary;

final class Advanced extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /sms/2/binary/advanced [operationId: send-binary-sms-message] */
    /**
     * Send binary SMS message
     *
     * Send single or multiple binary messages to one or more destination address. The API response will not contain the final delivery status, use [Delivery Reports](https://www.infobip.com/docs/api/channels/sms/sms-messaging/logs-and-status-reports/receive-outbound-sms-message-report) instead.\
     * In light of improved features, this endpoint has been superseded. Please visit [Send SMS message](#channels/sms/send-sms-messages) for the next version.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function post(\InfobipSDK\DTOs\N7b23cc7ec456214e90b61e3d5abd3aaf7422ea4b20f1cdd2d4e9c44fbceaf035\SMSAdvancedBinaryRequest $payload): \InfobipSDK\DTOs\N33e5f9b198702dad16ca1f81c1bb567a11b08d145013a25f78031b56a52d656b\SMSResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource2\Binary\Advanced::class)->post($payload);
    }

}
