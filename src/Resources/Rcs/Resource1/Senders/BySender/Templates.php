<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Rcs\Resource1\Senders\BySender;

final class Templates extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rcs/1/senders/{sender}/templates',
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
        'responseType' => '\\InfobipSDK\\Collections\\Rcs\\Resource1\\Senders\\BySender\\Templates\\Get\\BySenderTemplatesCollection',
    ];

    /**
     * Get RCS templates
     *
     * Retrieve all RCS templates and their statuses for a specified sender. Available only for senders that support templates.
     */
    public function get(string $sender, ?\InfobipSDK\GetParams\Rcs\Resource1\Senders\BySender\Templates $params = null): \InfobipSDK\Collections\Rcs\Resource1\Senders\BySender\Templates\Get\BySenderTemplatesCollection
    {
        /** @var \InfobipSDK\Collections\Rcs\Resource1\Senders\BySender\Templates\Get\BySenderTemplatesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['sender' => $sender], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rcs/1/senders/{sender}/templates',
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\CreateRcsTemplateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create an RCS template
     *
     * Create an RCS template for a specified sender. The template will be submitted for review and approval. Once approved, the template can be used for messaging. Available only for senders that support templates.
     */
    public function post(string $sender, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CreateRcsTemplateRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        /** @var \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['sender' => $sender]);
        return $result;
    }

    private const array DELETE_BY_TEMPLATE_NAME = [
        'method' => 'DELETE',
        'path' => '/rcs/1/senders/{sender}/templates/{templateName}',
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
        'validation' => [
            'templateName' => [
                'minLength' => 1,
                'maxLength' => 20,
            ],
        ],
    ];

    /**
     * Delete an RCS template
     *
     * Delete an RCS template. Any messages sent using a deleted template will be rejected. Available only for senders that support templates.
     */
    public function deleteByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_TEMPLATE_NAME), path: $identifier);
        return;
    }

    private const array GET_BY_TEMPLATE_NAME = [
        'method' => 'GET',
        'path' => '/rcs/1/senders/{sender}/templates/{templateName}',
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
    ];

    /**
     * Get RCS template
     *
     * Retrieve a single RCS template with its status for a given sender and template name. Available only for senders that support templates.
     * Documentation: https://www.infobip.com/docs/rcs
     */
    public function getByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        /** @var \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TEMPLATE_NAME), path: $identifier);
        return $result;
    }

    private const array POST_BY_TEMPLATE_NAME = [
        'method' => 'POST',
        'path' => '/rcs/1/senders/{sender}/templates/{templateName}',
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
            'type' => '\\InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateContent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create an RCS template
     *
     * Create an RCS template for a specified sender. The template will be submitted for review and approval. Once approved, the template can be used for messaging. Available only for senders that support templates. Please note that this endpoint is deprecated and will be removed in future versions.
     *
     * @deprecated
     */
    public function postByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContent $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        /** @var \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate $result */
        $result = $this->executeBody(self::operation(self::POST_BY_TEMPLATE_NAME), $payload, path: $identifier);
        return $result;
    }

    private const array PUT_BY_TEMPLATE_NAME = [
        'method' => 'PUT',
        'path' => '/rcs/1/senders/{sender}/templates/{templateName}',
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
            'type' => '\\InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateContent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Edit an RCS template
     *
     * Edit an RCS template. Only PENDING, SUSPENDED or REJECTED templates can be edited. APPROVED templates cannot be modified. Available only for senders that support templates..
     */
    public function putByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContent $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        /** @var \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_TEMPLATE_NAME), $payload, path: $identifier);
        return $result;
    }
}
