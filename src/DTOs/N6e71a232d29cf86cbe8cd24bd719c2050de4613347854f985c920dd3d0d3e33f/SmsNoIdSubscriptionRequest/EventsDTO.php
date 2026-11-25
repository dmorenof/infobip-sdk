<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SmsNoIdSubscriptionRequest;

final class EventsDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SimpleSmsEvents::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FormatAwareSmsEvents::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleSmsEvents',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareSmsEvents',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareSmsEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'CLICK',
                    'DELIVERY',
                    'INBOUND_MESSAGE',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleSmsEvents' => [
        'kind' => 'string',
        'enum' => [
            'CLICK',
            'DELIVERY',
            'INBOUND_MESSAGE',
        ],
    ],
];
}
