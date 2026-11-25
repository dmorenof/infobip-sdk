<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\KakaoAlim\Resource1;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/kakao-alim/1/messages',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\ResponseEnvelopeMessageResponseMessageResponseDetails',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\KakaoAlimRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send a Kakao Alim message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#alim-talk
     */
    public function post(\InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimRequest $payload): \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        /** @var \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ResponseEnvelopeMessageResponseMessageResponseDetails $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
