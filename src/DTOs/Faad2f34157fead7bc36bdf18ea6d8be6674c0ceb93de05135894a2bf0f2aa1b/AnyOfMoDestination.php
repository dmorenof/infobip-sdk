<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

final class AnyOfMoDestination extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MoDestinationTo::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MoDestinationCc::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MoDestinationTo',
    ],
    [
        'kind' => 'reference',
        'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MoDestinationCc',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MoDestinationCc' => [
        'kind' => 'object',
        'properties' => [
            'cc' => [
                'kind' => 'string',
            ],
        ],
    ],
    'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MoDestinationTo' => [
        'kind' => 'object',
        'properties' => [
            'to' => [
                'kind' => 'string',
            ],
        ],
    ],
];
}
