<?php

declare(strict_types=1);

namespace InfobipSDK\Provisioning\Resource1;

final class Associations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /provisioning/1/associations [operationId: delete-resource-association] */
    /**
     * Delete resource association
     *
     * Delete a resource association.
     */
    public static function delete(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Associations::class)->delete($payload);
    }

    /** GET /provisioning/1/associations [operationId: get-resource-associations] */
    /**
     * Get resource associations
     *
     * Get a paginated list of resource associations.
     */
    public static function get(?\InfobipSDK\GetParams\Provisioning\Resource1\Associations $params = null): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageResourceAssociation
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Associations::class)->get($params);
    }

    /** POST /provisioning/1/associations [operationId: create-resource-association] */
    /**
     * Create resource association
     *
     * Create a resource association.
     */
    public static function post(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceAssociationRequest $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Associations::class)->post($payload);
    }
}
