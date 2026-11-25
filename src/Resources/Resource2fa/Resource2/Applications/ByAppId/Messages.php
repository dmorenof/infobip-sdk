<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId;

final class Messages extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/2fa/2/applications/{appId}/messages',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Collections\\Resource2fa\\Resource2\\Applications\\ByAppId\\Messages\\Get\\ByAppIdMessagesCollection',
    ];

    /**
     * Get all 2FA message templates
     *
     * List all message templates in a 2FA application.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function get(string $appId): \InfobipSDK\Collections\Resource2fa\Resource2\Applications\ByAppId\Messages\Get\ByAppIdMessagesCollection
    {
        /** @var \InfobipSDK\Collections\Resource2fa\Resource2\Applications\ByAppId\Messages\Get\ByAppIdMessagesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['appId' => $appId]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/2fa/2/applications/{appId}/messages',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Applications\\ByAppId\\Messages\\Post\\ByAppIdMessagesResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfCreate2faMessageTemplateBody\\TemplateBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create 2FA SMS or Voice message template
     *
     * Once you have your [2FA application](#channels/sms/2fa/2fa-configuration/create-2fa-application), create one or more [message templates](#channels/sms/2fa/2fa-configuration/create-2fa-message-template) where your PIN will be dynamically included when you send the PIN message over SMS or Voice.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function post(string $appId, ?\InfobipSDK\Requests\AllOfCreate2faMessageTemplateBody\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\Post\ByAppIdMessagesResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\Post\ByAppIdMessagesResponse $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['appId' => $appId]) : $this->executeArguments(self::operation(self::POST), path: ['appId' => $appId]);
        return $result;
    }

    private const array GET_BY_MSG_ID = [
        'method' => 'GET',
        'path' => '/2fa/2/applications/{appId}/messages/{msgId}',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Applications\\ByAppId\\Messages\\ByMsgId\\Get\\MessagesByMsgIdResponse',
    ];

    /**
     * Get 2FA message template
     *
     * Get a single 2FA message template from an application to see its configuration details.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function getByMsgId(\InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId $identifier): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Get\MessagesByMsgIdResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Get\MessagesByMsgIdResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MSG_ID), path: $identifier);
        return $result;
    }

    private const array PUT_BY_MSG_ID = [
        'method' => 'PUT',
        'path' => '/2fa/2/applications/{appId}/messages/{msgId}',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Applications\\ByAppId\\Messages\\ByMsgId\\Put\\MessagesByMsgIdResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfUpdate2faMessageTemplateBody\\TemplateBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update 2FA SMS or Voice message template
     *
     * Change configuration options for your existing 2FA application SMS or Voice message template.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function putByMsgId(\InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId $identifier, ?\InfobipSDK\Requests\AllOfUpdate2faMessageTemplateBody\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Put\MessagesByMsgIdResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Put\MessagesByMsgIdResponse $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT_BY_MSG_ID), $payload, path: $identifier) : $this->executeArguments(self::operation(self::PUT_BY_MSG_ID), path: $identifier);
        return $result;
    }

}
