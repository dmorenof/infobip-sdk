<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\Suppressions;

final class Domains extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/suppressions/domains [operationId: get-domains] */
    /**
     * Get suppression domains
     *
     * This method allows you to get domains that can be managed for suppressions and are either owned or have granted permissions.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\Suppressions\Domains $params = null): \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DomainInfoPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Suppressions\Domains::class)->get($params);
    }
}
