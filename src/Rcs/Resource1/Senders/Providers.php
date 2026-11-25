<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders;

final class Providers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/senders/providers [operationId: get-rcs-available-providers] */
    /**
     * Get RCS available providers
     *
     * Retrieve a list of RCS available providers specified by countries.
     */
    public static function get(?\InfobipSDK\GetParams\Rcs\Resource1\Senders\Providers $params = null): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsCountryProvidersPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\Providers::class)->get($params);
    }
}
