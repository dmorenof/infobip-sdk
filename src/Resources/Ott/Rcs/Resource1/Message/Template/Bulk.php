<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ott\Rcs\Resource1\Message\Template;

final class Bulk extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/ott/rcs/1/message/template/bulk',
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
            'type' => '\\InfobipSDK\\DTOs\\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd\\RcsBulkSendTemplateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send bulk RCS template message
     *
     * Used for sending bulk RCS template messages (only for Vodafone Idea Limited, India)
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd\RcsBulkSendTemplateRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse
    {
        /** @var \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
