<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

final class AnyOfDestinationSingle extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DestinationTo::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.DestinationTo',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
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
    ];
}
