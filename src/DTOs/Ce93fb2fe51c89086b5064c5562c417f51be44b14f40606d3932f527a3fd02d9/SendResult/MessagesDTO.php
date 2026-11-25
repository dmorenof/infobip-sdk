<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\SendResult;

final class MessagesDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MessageResultBcc::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MessageResultCc::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MessageResultTo::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultBcc',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultCc',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultTo',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResult' => [
            'kind' => 'anyOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultTo',
                ],
                [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultCc',
                ],
                [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultBcc',
                ],
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultBcc' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResult',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'bcc' => [
                            'kind' => 'string',
                        ],
                        'messageId' => [
                            'kind' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultCc' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResult',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'cc' => [
                            'kind' => 'string',
                        ],
                        'messageId' => [
                            'kind' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResultTo' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MessageResult',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'messageId' => [
                            'kind' => 'string',
                        ],
                        'to' => [
                            'kind' => 'string',
                        ],
                    ],
                ],
            ],
        ],
    ];
}
