<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

final class AnyOfMmsMoMessageSegment extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsMoTextSegment::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsMoLinkSegment::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsMoTextSegment',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsMoLinkSegment',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsMoLinkSegment' => [
            'kind' => 'object',
            'properties' => [
                'contentType' => [
                    'kind' => 'string',
                ],
                'url' => [
                    'kind' => 'string',
                ],
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsMoTextSegment' => [
            'kind' => 'object',
            'properties' => [
                'contentType' => [
                    'kind' => 'string',
                ],
                'value' => [
                    'kind' => 'string',
                ],
            ],
        ],
    ];
}
