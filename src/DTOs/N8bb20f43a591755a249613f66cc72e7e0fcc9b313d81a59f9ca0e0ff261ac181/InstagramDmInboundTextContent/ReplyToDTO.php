<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmInboundTextContent;

final class ReplyToDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InlineMessageReplyInstagramDmInboundContent::class, \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\StoryReplyInstagramDmInboundContent::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InlineMessageReplyInstagramDmInboundContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.StoryReplyInstagramDmInboundContent',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.InlineMessageReplyInstagramDmInboundContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.ReplyToInstagramDmInboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'mid' => [
                            'kind' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.ReplyToInstagramDmInboundContent' => [
            'kind' => 'object',
        ],
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.StoryInfoInboundContent' => [
            'kind' => 'object',
            'properties' => [
                'id' => [
                    'kind' => 'string',
                ],
                'url' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.StoryReplyInstagramDmInboundContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.ReplyToInstagramDmInboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'story' => [
                            'kind' => 'reference',
                            'ref' => '8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181.StoryInfoInboundContent',
                        ],
                    ],
                ],
            ],
        ],
    ];
}
