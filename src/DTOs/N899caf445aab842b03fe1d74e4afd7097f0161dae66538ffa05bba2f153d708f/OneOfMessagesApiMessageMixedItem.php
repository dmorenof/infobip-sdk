<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

final class OneOfMessagesApiMessageMixedItem extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageMixedMediaItem::class, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageMixedTextItem::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageMixedMediaItem',
    ],
    [
        'kind' => 'reference',
        'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageMixedTextItem',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageMixedMediaItem' => [
        'kind' => 'object',
        'properties' => [
            'contentId' => [
                'kind' => 'string',
            ],
            'url' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'pattern' => '',
                ],
            ],
        ],
        'required' => [
            'url',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageMixedTextItem' => [
        'kind' => 'object',
        'properties' => [
            'contentId' => [
                'kind' => 'string',
            ],
            'text' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
        ],
        'required' => [
            'text',
        ],
    ],
];
}
