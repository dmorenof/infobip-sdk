<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Signals\Resource2\Configs;

final class Blocking extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/signals/2/configs/blocking',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\BlockingConfigPageResponse',
    ];

    /**
     * List blocking configs
     *
     * List paginated blocking configurations for the caller's account.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function get(?\InfobipSDK\GetParams\Signals\Resource2\Configs\Blocking $params = null): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigPageResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigPageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/signals/2/configs/blocking',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\BlockingConfigListResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\UpdateBlockingConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update blocking configs
     *
     * Update sensitivity and/or enable or disable a list of existing blocking configs.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function patch(\InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateBlockingConfigRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/signals/2/configs/blocking',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\BlockingConfigListResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\\CreateBlockingConfigRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create blocking configs
     *
     * Create blocking configuration for a list of platforms (application/entity pairs).
     *
     * <br>
     *
     * **Important:** For base URL, use `xxxxx.api.infobip.com` - the subdomain must be exactly `api`, not variants like `api-us`. See how to get the prefix in [Base URLs](https://www.infobip.com/docs/essentials/api-essentials/base-url).
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public function post(\InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateBlockingConfigRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse
    {
        /** @var \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
