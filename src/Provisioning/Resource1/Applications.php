<?php

declare(strict_types=1);

namespace InfobipSDK\Provisioning\Resource1;

final class Applications extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /provisioning/1/applications [operationId: get-applications] */
    /**
     * Get applications
     *
     * Get a paginated list of applications.
     */
    public static function get(?\InfobipSDK\GetParams\Provisioning\Resource1\Applications $params = null): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageApplication
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Applications::class)->get($params);
    }

    /** POST /provisioning/1/applications [operationId: create-application] */
    /**
     * Create application
     *
     * Create an application associated with the specified `applicationId`.
     */
    public static function post(\InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Application $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Applications::class)->post($payload);
    }

    /** DELETE /provisioning/1/applications/{applicationId} [operationId: delete-application] */
    /**
     * Delete application
     *
     * Delete an application associated with the specified `applicationId`. <br>Deleting an application will reset all resources that were linked to that application to application = default and entity = null. You should ensure that any configuration (like resource associations, inbound message configurations, subscriptions, bots, API Keys etc) related to given application are appropriately reassigned to other applications before attempting to delete the application.
     */
    public static function deleteByApplicationId(string $applicationId, ?\InfobipSDK\DeleteParams\Provisioning\Resource1\Applications\ByApplicationId $params = null): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Applications::class)->deleteByApplicationId($applicationId, $params);
    }

    /** GET /provisioning/1/applications/{applicationId} [operationId: get-application] */
    /**
     * Get application
     *
     * Get an application for the specified `applicationId`.
     */
    public static function getByApplicationId(string $applicationId): \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Application
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Applications::class)->getByApplicationId($applicationId);
    }

    /** PUT /provisioning/1/applications/{applicationId} [operationId: modify-application] */
    /**
     * Modify application
     *
     * Modify a resource `name` property.
     */
    public static function putByApplicationId(string $applicationId, \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ModifyApplication $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource1\Applications::class)->putByApplicationId($applicationId, $payload);
    }
}
