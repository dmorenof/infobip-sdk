<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1;

final class Applications extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/1/applications [operationId: get-push-applications] */
    /**
     * Get push applications
     *
     * The following method allows you to fetch all application profiles configured on a single account.
     */
    public static function get(): \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications::class)->get();
    }

    /** GET /push/1/applications/{applicationCode} [operationId: get-push-application] */
    /**
     * Get push Application by applicationCode
     *
     * The following method allows you to fetch information about a specific application profile.
     */
    public static function getByApplicationCode(string $applicationCode, ?\InfobipSDK\GetParams\Push\Resource1\Applications\ByApplicationCode $params = null): \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Applications::class)->getByApplicationCode($applicationCode, $params);
    }

}
