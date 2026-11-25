<?php

declare(strict_types=1);

namespace InfobipSDK\Signals\Resource2\Configs\Blocking\ByConfigId;

final class TrustedNumbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /signals/2/configs/blocking/{configId}/trusted-numbers [operationId: delete-trusted-msisdns] */
    /**
     * Remove trusted phone numbers
     *
     * Remove phone numbers from the trusted list of a blocking configuration, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function delete(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DeleteTrustedNumbersRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumbersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers::class)->delete($configId, $payload);
    }

    /** POST /signals/2/configs/blocking/{configId}/trusted-numbers [operationId: create-trusted-msisdns] */
    /**
     * Add trusted phone numbers
     *
     * Add phone numbers to the trusted list of a blocking configuration, identified by the configId path parameter. Numbers that are already trusted are left unchanged.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function post(string $configId, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\AddTrustedNumbersRequest $payload): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumbersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers::class)->post($configId, $payload);
    }

    /** GET /signals/2/configs/blocking/{configId}/trusted-numbers/{phoneNumber} [operationId: get-trusted-msisdns] */
    /**
     * Check if a phone number is trusted
     *
     * Check whether a single phone number is on the trusted list of a blocking configuration, identified by the configId path parameter.
     *
     * <br>
     *
     * [Learn more about Signals product.](https://www.infobip.com/docs/signals)
     */
    public static function getByPhoneNumber(\InfobipSDK\PathParams\Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers\ByPhoneNumber $identifier): \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\TrustedNumberCheckResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers::class)->getByPhoneNumber($identifier);
    }
}
