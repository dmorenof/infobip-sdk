<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Email;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/2fa/2/applications/{appId}/email/messages',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            429 => [
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
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Applications\\ByAppId\\Email\\Messages\\Post\\EmailMessagesResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\TemplateBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create 2FA Email message template
     *
     * Once you have your [2FA application](#channels/sms/create-2fa-application), create one or more [Email message templates](https://www.infobip.com/docs/email/templates) where your PIN will be dynamically included when you send the PIN message over Email.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function post(string $appId, ?\InfobipSDK\Requests\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\Post\EmailMessagesResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\Post\EmailMessagesResponse $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['appId' => $appId]) : $this->executeArguments(self::operation(self::POST), path: ['appId' => $appId]);
        return $result;
    }

    private const array PUT_BY_MSG_ID = [
        'method' => 'PUT',
        'path' => '/2fa/2/applications/{appId}/email/messages/{msgId}',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            429 => [
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
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Applications\\ByAppId\\Email\\Messages\\ByMsgId\\Put\\MessagesByMsgIdResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfUpdate2faEmailMessageTemplateBody\\TemplateBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update 2FA Email message template
     *
     * Change configuration options for your existing 2FA application Email message template.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function putByMsgId(\InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\ByMsgId $identifier, ?\InfobipSDK\Requests\AllOfUpdate2faEmailMessageTemplateBody\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\ByMsgId\Put\MessagesByMsgIdResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\ByMsgId\Put\MessagesByMsgIdResponse $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT_BY_MSG_ID), $payload, path: $identifier) : $this->executeArguments(self::operation(self::PUT_BY_MSG_ID), path: $identifier);
        return $result;
    }
}
