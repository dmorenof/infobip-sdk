<?php

declare(strict_types=1);

namespace InfobipSDK\Signals\Resource2\Configs\Blocking\ByConfigId;

final class Overrides extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /signals/2/configs/blocking/{configId}/overrides [operationId: delete-blocking-config-override] */
    /**
     * Delete country-level blocking overrides
     *
     * Delete a list of existing country-level blocking overrides.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function delete(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteOverrideRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteOverrideResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::class)->delete($configId, $payload);
    }

    /** GET /signals/2/configs/blocking/{configId}/overrides [operationId: get-blocking-config-override] */
    /**
     * List country-level blocking overrides
     *
     * List paginated country-level blocking overrides for an existing blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function get(string $configId, ?\InfobipSDK\GetParams\Signals\Resource2\Configs\Blocking\ByConfigId\Overrides $params = null): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\OverridePageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::class)->get($configId, $params);
    }

    /** PATCH /signals/2/configs/blocking/{configId}/overrides [operationId: update-blocking-config-override] */
    /**
     * Update country-level blocking overrides
     *
     * Update sensitivity for a list of existing country-level blocking overrides.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function patch(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\UpdateOverrideRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\OverrideListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::class)->patch($configId, $payload);
    }

    /** POST /signals/2/configs/blocking/{configId}/overrides [operationId: create-blocking-config-override] */
    /**
     * Create country-level blocking overrides
     *
     * Create country-level blocking overrides for an existing blocking config, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function post(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateOverrideRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\OverrideListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::class)->post($configId, $payload);
    }

}
