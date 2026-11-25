<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName;

final class Register extends \InfobipSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/rcs/1/senders/{sender}/templates/{templateName}/register',
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
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplate',
        'validation' => [
            'templateName' => [
                'minLength' => 1,
                'maxLength' => 20,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsRegisterTemplateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Register an RCS template
     *
     * Registers an RCS template with additional providers. Available only for senders that support templates.
     */
    public function patch(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Register $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsRegisterTemplateRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        /** @var \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload, path: $identifier);
        return $result;
    }

}
