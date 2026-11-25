<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

final class AnyOfDestination extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DestinationTo::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\GroupDestination::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.DestinationTo',
    ],
    [
        'kind' => 'reference',
        'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.GroupDestination',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.DestinationSingle' => [
        'kind' => 'anyOf',
        'branches' => [
            [
                'kind' => 'reference',
                'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.DestinationTo',
            ],
        ],
    ],
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.DestinationTo' => [
        'kind' => 'object',
        'properties' => [
            'messageId' => [
                'kind' => 'string',
            ],
            'to' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 50,
                ],
            ],
        ],
        'writeOnly' => [
            'messageId',
            'to',
        ],
        'required' => [
            'to',
        ],
    ],
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.GroupDestination' => [
        'kind' => 'object',
        'properties' => [
            'group' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 1,
                    'maxItems' => 200,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.DestinationSingle',
                ],
            ],
        ],
        'required' => [
            'group',
        ],
    ],
];
}
