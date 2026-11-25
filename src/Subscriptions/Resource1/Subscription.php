<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1;

final class Subscription extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /subscriptions/1/subscription/{channel} [operationId: get-subscriptions] */
    /**
     * Get subscriptions
     *
     * Returns a list of all subscriptions for the specified channel with pagination. By default, the result is sorted by creation date in descending order.<br>The search can be used with various criteria passed via query parameters (all criteria combinations have <strong>AND</strong> semantic).<br><strong>Note.</strong>To avoid validation errors and inconsistent results query parameters need to be encoded  (see <strong>RFC 3986, section 2.1</strong>).<br><strong>Example</strong>. Find subscriptions having applications 'app1' and 'app2', and the resource '100200300400'.<pre>/subscriptions/1/subscription/SMS?applicationId=app1&applicationId=app2&resource=100200300400</pre>
     */
    public static function getByChannel(\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionChannel $channel, ?\InfobipSDK\GetParams\Subscriptions\Resource1\Subscription\ByChannel $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Subscription::class)->getByChannel($channel, $params);
    }

    /** POST /subscriptions/1/subscription/{channel} [operationId: create-subscription] */
    /**
     * Create subscription
     *
     * This method will create a new subscription. You can provide an ID of an existing profile, or submit a full definition of a profile and security settings if you want to create new ones.
     */
    public static function postByChannel(\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionChannel $channel, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OneOfSubscriptionRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySubscriptionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Subscription::class)->postByChannel($channel, $payload);
    }

}
