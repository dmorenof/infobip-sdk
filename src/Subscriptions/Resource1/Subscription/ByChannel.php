<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1\Subscription;

final class ByChannel extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /subscriptions/1/subscription/{channel}/{subscriptionId} [operationId: delete-subscription] */
    /**
     * Delete subscription
     *
     * This method will delete the subscription specified by ID.
     */
    public static function deleteBySubscriptionId(\InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel\BySubscriptionId $identifier): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Subscription\ByChannel::class)->deleteBySubscriptionId($identifier);
    }

    /** GET /subscriptions/1/subscription/{channel}/{subscriptionId} [operationId: get-subscription] */
    /**
     * Get single subscription
     *
     * Returns a specific subscription by ID.
     */
    public static function getBySubscriptionId(\InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel\BySubscriptionId $identifier): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Subscription\ByChannel::class)->getBySubscriptionId($identifier);
    }

    /** PUT /subscriptions/1/subscription/{channel}/{subscriptionId} [operationId: update-subscription] */
    /**
     * Update subscription
     *
     * This method allows you to update the subscription. You can change its properties and provide an ID of a profile if you wish to change it.
     */
    public static function putBySubscriptionId(\InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel\BySubscriptionId $identifier, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OneOfNoIdSubscriptionRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Subscription\ByChannel::class)->putBySubscriptionId($identifier, $payload);
    }

}
