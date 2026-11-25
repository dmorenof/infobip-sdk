<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Ctc\Resource1;

final class Send extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/ctc/1/send',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\\StandardVoiceResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N977e3573b6848c404863a30ecae06e08186a75a9070af48acc4b4f99a371a9b7\\ClickToCallApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send click-to-call message
     *
     * This method allows you to send click-to-call voice messages.
     * Documentation: https://www.infobip.com/docs/voice-and-video/click-to-call
     */
    public function post(\InfobipSDK\DTOs\N977e3573b6848c404863a30ecae06e08186a75a9070af48acc4b4f99a371a9b7\ClickToCallApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        /** @var \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
