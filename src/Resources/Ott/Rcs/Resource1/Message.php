<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ott\Rcs\Resource1;

final class Message extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/ott/rcs/1/message',
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
            400 => '\\InfobipSDK\\DTOs\\N7e9cb629dd52a85ce6e062228c85b37a768e3c9da7cd3bd0d9451171d2b14262\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N7e9cb629dd52a85ce6e062228c85b37a768e3c9da7cd3bd0d9451171d2b14262\\ApiException',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\RcsApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\A09fd2f38320e8e77c07ff55b0f3c0f934582962897bb3b86f1a032582a1cc60\\RcsSendRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send RCS message
     *
     * Used for sending single RCS messages
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\A09fd2f38320e8e77c07ff55b0f3c0f934582962897bb3b86f1a032582a1cc60\RcsSendRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse
    {
        /** @var \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
