<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1;

final class Resources extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /resources/1/resources [operationId: list-resources] */
    /**
     * Search resources
     *
     * Search resources already owned by your account, such as senders and usable numbers, using filters. This endpoint does not return available resources for purchase or request, it only lists resources that are currently assigned to you.<br/>
     * Pagination is supported; however, if no pagination arguments are supplied, the full unpaginated result set will be returned.
     *
     */
    public static function post(?\InfobipSDK\PostParams\Resources\Resource1\Resources $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourcesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Resources::class)->post($params);
    }

}
