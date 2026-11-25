<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource3;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/sms/3/messages',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\\SmsResponseEnvelope',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\\SmsRequestEnvelope',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send SMS message
     *
     * With this API method, you can do anything from sending a basic message to one person, all the way to sending customized messages to thousands of recipients in one go. It comes with a range of useful features like transliteration, scheduling, and tracking in a unified way.\
     * If utilizing Message Delivery Reports webhook, please consult the documentation provided at [Receive outbound SMS message reports](#channels/sms/receive-outbound-sms-message-report-v3).\
     * This endpoint is the successor of [Send SMS message](#channels/sms/send-sms-message) and [Send binary SMS message](#channels/sms/send-binary-sms-message).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function post(\InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsRequestEnvelope $payload): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsResponseEnvelope
    {
        /** @var \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsResponseEnvelope $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
