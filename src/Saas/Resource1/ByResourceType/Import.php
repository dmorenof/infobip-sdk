<?php

declare(strict_types=1);

namespace InfobipSDK\Saas\Resource1\ByResourceType;

final class Import extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /saas/1/{resourceType}/import [operationId: import-saas-resource] */
    /**
     * Import SaaS resource
     *
     * Import a SaaS resource to your account.
     */
    public static function post(\InfobipSDK\Enums\Saas\Resource1\ByResourceType\Import\Post\Path\ResourceTypeEnum $resourceType, ?\InfobipSDK\Requests\Saas\Resource1\ByResourceType\Import\Post $payload = null): \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ImportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Saas\Resource1\ByResourceType\Import::class)->post($resourceType, $payload);
    }

}
