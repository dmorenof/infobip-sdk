<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

final class OneOfMmsUnificationDestination extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationDestinationSingle::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationDestinationGroup::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsUnificationDestinationSingle',
    ],
    [
        'kind' => 'reference',
        'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsUnificationDestinationGroup',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsUnificationDestinationGroup' => [
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
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsUnificationDestinationSingle',
                ],
            ],
        ],
        'required' => [
            'group',
        ],
    ],
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsUnificationDestinationSingle' => [
        'kind' => 'object',
        'properties' => [
            'messageId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 200,
                ],
            ],
            'to' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
        ],
        'required' => [
            'to',
        ],
    ],
];
}
