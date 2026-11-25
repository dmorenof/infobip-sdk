<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Routing extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /ccaas/1/routing [operationId: delete-routing] */
    /**
     * Delete routing
     *
     * Use this method to delete routing. No parameters are required for this action.
     *
     * This operation will delete routing with all rules inside, so all new inbound messages destined to routing will be routed to the default queue.
     * <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function delete(): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Routing::class)->delete();
    }

    /** GET /ccaas/1/routing [operationId: get-routing] */
    /**
     * Get routing
     *
     * Use this method to get a list of rules within the routing. Pagination is set to single page result with a maximum of 999 items ordered by "order". As rules inside routing are stored, executed and retrieved in provided order with the SET method, that order can't be changed. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Routing $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RoutingRulesResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Routing::class)->get($params);
    }

    /** PUT /ccaas/1/routing [operationId: update-routing] */
    /**
     * Create routing
     *
     * Create routing method creates a new routing setup if it does not exist or replaces the existing setup. As rules inside routing are stored, executed, and retrieved in the provided order with this method, that order cannot be changed. Every expression within routing can be constructed with at least one or more available operators. The result of the expression will be a success (TRUE) only if all results of operations are TRUE. The query will be executed, one expression after another, in the order they are submitted until new a inbound message first matches the expression. Then the message will be assigned to the matched queue.
     *
     * The order of rules inside routing is essential for proper routing, as rules match in the provided order. The first rule matching the message will be used.
     * <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function put(\InfobipSDK\Collections\RoutingBodyCollection $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Routing::class)->put($payload);
    }

}
