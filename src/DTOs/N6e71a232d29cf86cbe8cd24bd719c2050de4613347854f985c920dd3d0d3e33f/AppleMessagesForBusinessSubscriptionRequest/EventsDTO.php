<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AppleMessagesForBusinessSubscriptionRequest;

final class EventsDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SimpleAppleMessagesForBusinessEvents::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FormatAwareAppleMessagesForBusinessEvents::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleAppleMessagesForBusinessEvents',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareAppleMessagesForBusinessEvents',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareAppleMessagesForBusinessEvents' => [
            'kind' => 'object',
            'properties' => [
                'event' => [
                    'kind' => 'string',
                    'enum' => [
                        'DELIVERY',
                        'INBOUND_MESSAGE',
                        'TYPING_INDICATOR',
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
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleAppleMessagesForBusinessEvents' => [
            'kind' => 'string',
            'enum' => [
                'DELIVERY',
                'INBOUND_MESSAGE',
                'TYPING_INDICATOR',
            ],
        ],
    ];
}
