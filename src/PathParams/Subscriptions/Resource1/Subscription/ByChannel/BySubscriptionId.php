<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Subscriptions\Resource1\Subscription\ByChannel;

final class BySubscriptionId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel',
    'subscriptionId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'channel' => 'channel',
        'subscriptionId' => 'subscriptionId',
    ],
    'query' => [],
    'header' => [],
];

    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionChannel $channel;
    public string $subscriptionId;
}
