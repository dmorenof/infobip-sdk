<?php

declare(strict_types=1);

namespace InfobipSDK\Signals\Resource2\Configs\Blocking\ByConfigId;

final class DailyLimits extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /signals/2/configs/blocking/{configId}/daily-limits [operationId: delete-daily-limits] */
    /**
     * Delete daily limits
     *
     * Delete daily message count limits for a list of countries on a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function delete(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteDailyLimitsRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteDailyLimitsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::class)->delete($configId, $payload);
    }

    /** GET /signals/2/configs/blocking/{configId}/daily-limits [operationId: get-daily-limits] */
    /**
     * List daily limits
     *
     * List paginated daily message count limits for a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function get(string $configId, ?\InfobipSDK\GetParams\Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits $params = null): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::class)->get($configId, $params);
    }

    /** PATCH /signals/2/configs/blocking/{configId}/daily-limits [operationId: update-daily-limits] */
    /**
     * Update daily limits
     *
     * Update daily message count limits for a list of countries on a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function patch(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateDailyLimitsRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::class)->patch($configId, $payload);
    }

    /** POST /signals/2/configs/blocking/{configId}/daily-limits [operationId: create-daily-limits] */
    /**
     * Create daily limits
     *
     * Create daily message count limits for a list of countries on a blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function post(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateDailyLimitsRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::class)->post($configId, $payload);
    }
}
