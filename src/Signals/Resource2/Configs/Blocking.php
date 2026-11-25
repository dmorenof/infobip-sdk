<?php

declare(strict_types=1);

namespace InfobipSDK\Signals\Resource2\Configs;

final class Blocking extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /signals/2/configs/blocking [operationId: get-blocking-config] */
    /**
     * List blocking configs
     *
     * List paginated blocking configurations for the caller's account.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function get(?\InfobipSDK\GetParams\Signals\Resource2\Configs\Blocking $params = null): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking::class)->get($params);
    }

    /** PATCH /signals/2/configs/blocking [operationId: update-blocking-config] */
    /**
     * Update blocking configs
     *
     * Update sensitivity and/or enable or disable a list of existing blocking configs.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function patch(\InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateBlockingConfigRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking::class)->patch($payload);
    }

    /** POST /signals/2/configs/blocking [operationId: create-blocking-config] */
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
    public static function post(\InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateBlockingConfigRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking::class)->post($payload);
    }

}
