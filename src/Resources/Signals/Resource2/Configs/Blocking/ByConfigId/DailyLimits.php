<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId;

final class DailyLimits extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/signals/2/configs/blocking/{configId}/daily-limits',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\DeleteDailyLimitsResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\DeleteDailyLimitsRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete daily limits
     *
     * Delete daily message count limits for a list of countries on a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function delete(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteDailyLimitsRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteDailyLimitsResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteDailyLimitsResponse $result */
        $result = $this->executeBody(self::operation(self::DELETE), $payload, path: ['configId' => $configId]);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/signals/2/configs/blocking/{configId}/daily-limits',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\DailyLimitPageResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
    ];

    /**
     * List daily limits
     *
     * List paginated daily message count limits for a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function get(string $configId, ?\InfobipSDK\GetParams\Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits $params = null): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitPageResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitPageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['configId' => $configId], parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/signals/2/configs/blocking/{configId}/daily-limits',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\DailyLimitListResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\UpdateDailyLimitsRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update daily limits
     *
     * Update daily message count limits for a list of countries on a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function patch(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateDailyLimitsRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload, path: ['configId' => $configId]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/signals/2/configs/blocking/{configId}/daily-limits',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'success' => [
            201,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\DailyLimitListResponse',
        'validation' => [
            'configId' => [
                'minLength' => 32,
                'maxLength' => 32,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\CreateDailyLimitsRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create daily limits
     *
     * Create daily message count limits for a list of countries on a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function post(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateDailyLimitsRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['configId' => $configId]);
        return $result;
    }

}
