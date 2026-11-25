<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource3;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /sms/3/messages [operationId: send-sms-messages] */
    /**
     * Send SMS message
     *
     * With this API method, you can do anything from sending a basic message to one person, all the way to sending customized messages to thousands of recipients in one go. It comes with a range of useful features like transliteration, scheduling, and tracking in a unified way.\
     * If utilizing Message Delivery Reports webhook, please consult the documentation provided at [Receive outbound SMS message reports](#channels/sms/receive-outbound-sms-message-report-v3).\
     * This endpoint is the successor of [Send SMS message](#channels/sms/send-sms-message) and [Send binary SMS message](#channels/sms/send-binary-sms-message).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function post(\InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsRequestEnvelope $payload): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsResponseEnvelope
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource3\Messages::class)->post($payload);
    }

}
