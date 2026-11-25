<?php

declare(strict_types=1);

namespace InfobipSDK\Provisioning\Resource1\Associations;

final class Single extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /provisioning/1/associations/single [operationId: get-resource-association] */
    /**
     * Get resource association
     *
     * Get an exact resource association.
     */
    public static function get(\InfobipSDK\GetParams\Provisioning\Resource1\Associations\Single $params): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Associations\Single::class)->get($params);
    }
}
