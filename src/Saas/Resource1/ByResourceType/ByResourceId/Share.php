<?php

declare(strict_types=1);

namespace InfobipSDK\Saas\Resource1\ByResourceType\ByResourceId;

final class Share extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /saas/1/{resourceType}/{resourceId}/share [operationId: share-saas-resource] */
    /**
     * Share SaaS resource
     *
     * Use this endpoint to share a SaaS resource with other accounts. You can check the status of your share request [here](https://www.infobip.com/docs/api/customer-engagement/common-assets/saas-request-status).
     */
    public static function post(\InfobipSDK\PathParams\Saas\Resource1\ByResourceType\ByResourceId\Share $identifier, \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ShareRequest $payload): \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ShareResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Saas\Resource1\ByResourceType\ByResourceId\Share::class)->post($identifier, $payload);
    }

}
