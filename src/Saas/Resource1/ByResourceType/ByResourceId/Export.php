<?php

declare(strict_types=1);

namespace InfobipSDK\Saas\Resource1\ByResourceType\ByResourceId;

final class Export extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /saas/1/{resourceType}/{resourceId}/export [operationId: export-saas-resource] */
    /**
     * Export SaaS resource
     *
     * Choose a Saas resource to export and receive the file in the API response.
     */
    public static function get(\InfobipSDK\PathParams\Saas\Resource1\ByResourceType\ByResourceId\Export $identifier): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Saas\Resource1\ByResourceType\ByResourceId\Export::class)->get($identifier);
    }
}
