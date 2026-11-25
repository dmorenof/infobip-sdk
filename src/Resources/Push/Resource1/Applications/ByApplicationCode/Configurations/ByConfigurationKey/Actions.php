<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey;

final class Actions extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/push/1/applications/{applicationCode}/configurations/{configurationKey}/actions',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\\ActionsResponse',
    ];

    /**
     * List all actions
     *
     * List all actions for an MO (Mobile Originated) message configuration.
     */
    public function get(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions $identifier): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionsResponse
    {
        /** @var \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/push/1/applications/{applicationCode}/configurations/{configurationKey}/actions',
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
            400 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\\ActionResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\\ActionRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create new action
     *
     * Create a new action for an MO (Mobile Originated) message configuration. Supported action types are HTTP_FORWARD and PULL.
     */
    public function post(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions $identifier, \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionRequest $payload): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionResponse
    {
        /** @var \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\ActionResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

    private const array DELETE_BY_ACTION_KEY = [
        'method' => 'DELETE',
        'path' => '/push/1/applications/{applicationCode}/configurations/{configurationKey}/actions/{actionKey}',
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
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
    ];

    /**
     * Delete action
     *
     * Delete an action from an MO (Mobile Originated) message configuration.
     */
    public function deleteByActionKey(\InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions\ByActionKey $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ACTION_KEY), path: $identifier);
        return;
    }

}
