<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

final class OneOfPlayContent extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\FilePlayContent::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\UrlPlayContent::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingPlayContent::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.FilePlayContent',
    ],
    [
        'kind' => 'reference',
        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.UrlPlayContent',
    ],
    [
        'kind' => 'reference',
        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingPlayContent',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.FilePlayContent' => [
        'kind' => 'object',
        'properties' => [
            'fileId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
            'type' => [
                'kind' => 'string',
                'enum' => [
                    'FILE',
                ],
            ],
        ],
        'required' => [
            'fileId',
            'type',
        ],
    ],
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingPlayContent' => [
        'kind' => 'object',
        'properties' => [
            'fileId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
            'type' => [
                'kind' => 'string',
                'enum' => [
                    'RECORDING',
                ],
            ],
        ],
        'required' => [
            'fileId',
            'type',
        ],
    ],
    '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.UrlPlayContent' => [
        'kind' => 'object',
        'properties' => [
            'cacheDuration' => [
                'kind' => 'integer',
                'rules' => [
                    'minimum' => 0,
                    'maximum' => 86400,
                    'exclusiveMinimum' => 0,
                    'format' => 'int32',
                ],
            ],
            'fileUrl' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
            'type' => [
                'kind' => 'string',
                'enum' => [
                    'URL',
                ],
            ],
        ],
        'required' => [
            'fileUrl',
            'type',
        ],
    ],
];
}
