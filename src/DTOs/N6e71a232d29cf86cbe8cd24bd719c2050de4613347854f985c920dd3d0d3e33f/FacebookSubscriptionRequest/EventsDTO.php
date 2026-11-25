<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FacebookSubscriptionRequest;

final class EventsDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SimpleFacebookEvents::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FormatAwareFacebookEvents::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleFacebookEvents',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareFacebookEvents',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareFacebookEvents' => [
            'kind' => 'object',
            'properties' => [
                'event' => [
                    'kind' => 'string',
                    'enum' => [
                        'AUDIENCE_UPLOAD_STATUS',
                        'CLICK',
                        'CONSENT_UPDATE',
                        'DELIVERY',
                        'INBOUND_MESSAGE',
                        'SEEN',
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
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleFacebookEvents' => [
            'kind' => 'string',
            'enum' => [
                'AUDIENCE_UPLOAD_STATUS',
                'CLICK',
                'CONSENT_UPDATE',
                'DELIVERY',
                'INBOUND_MESSAGE',
                'SEEN',
            ],
        ],
    ];
}
