<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

final class OneOfSubscriptionEvent extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = ['string', \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FormatAwareEvent::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'string',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareEvent',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareEvent' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
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
];
}
