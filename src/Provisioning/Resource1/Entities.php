<?php

declare(strict_types=1);

namespace InfobipSDK\Provisioning\Resource1;

final class Entities extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /provisioning/1/entities [operationId: get-entities] */
    /**
     * Get entities
     *
     * Get a paginated list of entities.
     */
    public static function get(?\InfobipSDK\GetParams\Provisioning\Resource1\Entities $params = null): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageEntity
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Entities::class)->get($params);
    }

    /** POST /provisioning/1/entities [operationId: create-entity] */
    /**
     * Create entity
     *
     * Create an entity associated with the specified `entityId`. <br>An entity attached to a submitted message will get auto created if it doesn't exit yet. It will get the entityId and entityName being the value passed on a message.
     */
    public static function post(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Entity $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Entities::class)->post($payload);
    }

    /** DELETE /provisioning/1/entities/{entityId} [operationId: delete-entity] */
    /**
     * Delete entity
     *
     * Delete an entity associated with the specified `entityId`. <br> Deleting an entity will reset all resources that were linked to that entity to application = default and entity = null. You should ensure that any configuration (like resource associations, inbound message configurations, subscriptions, bots, API Keys etc) related to given entity are appropriately reassigned to other entities before attempting to delete the entity.
     */
    public static function deleteByEntityId(string $entityId, ?\InfobipSDK\DeleteParams\Provisioning\Resource1\Entities\ByEntityId $params = null): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Entities::class)->deleteByEntityId($entityId, $params);
    }

    /** GET /provisioning/1/entities/{entityId} [operationId: get-entity] */
    /**
     * Get entity
     *
     * Get an entity for the specified `entityId`.
     */
    public static function getByEntityId(string $entityId): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Entity
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Entities::class)->getByEntityId($entityId);
    }

    /** PUT /provisioning/1/entities/{entityId} [operationId: modify-entity] */
    /**
     * Modify entity
     *
     * Modify a resource `name` property.
     */
    public static function putByEntityId(string $entityId, \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ModifyEntity $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Entities::class)->putByEntityId($entityId, $payload);
    }

}
