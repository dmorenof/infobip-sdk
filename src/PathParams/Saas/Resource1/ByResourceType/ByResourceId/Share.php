<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Saas\Resource1\ByResourceType\ByResourceId;

final class Share extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'resourceId',
        'resourceType',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'resourceId' => 'resourceId',
            'resourceType' => 'resourceType',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $resourceId;
    public \InfobipSDK\Enums\Saas\Resource1\ByResourceType\ByResourceId\Share\Post\Path\ResourceTypeEnum $resourceType;
}
