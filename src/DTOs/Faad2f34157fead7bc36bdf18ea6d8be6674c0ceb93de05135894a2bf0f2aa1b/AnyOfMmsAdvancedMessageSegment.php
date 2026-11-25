<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

final class AnyOfMmsAdvancedMessageSegment extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessageSegmentText::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessageSegmentLink::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessageSegmentBinary::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessageSegmentSmil::class, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsAdvancedMessageSegmentUploadReference::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentText',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentLink',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentBinary',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentSmil',
        ],
        [
            'kind' => 'reference',
            'ref' => 'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentUploadReference',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentBinary' => [
            'kind' => 'object',
            'properties' => [
                'contentBase64' => [
                    'kind' => 'string',
                ],
                'contentId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'contentType' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'writeOnly' => [
                'contentBase64',
                'contentId',
                'contentType',
            ],
            'required' => [
                'contentType',
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentLink' => [
            'kind' => 'object',
            'properties' => [
                'contentId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'contentType' => [
                    'kind' => 'string',
                ],
                'contentUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'writeOnly' => [
                'contentId',
                'contentType',
                'contentUrl',
            ],
            'required' => [
                'contentUrl',
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentSmil' => [
            'kind' => 'object',
            'properties' => [
                'contentId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'contentType' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'smil' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'contentId',
                'contentType',
                'smil',
            ],
            'required' => [
                'contentType',
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentText' => [
            'kind' => 'object',
            'properties' => [
                'contentId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'text' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'contentId',
                'text',
            ],
        ],
        'faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b.MmsAdvancedMessageSegmentUploadReference' => [
            'kind' => 'object',
            'properties' => [
                'contentId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'uploadedContentId' => [
                    'kind' => 'string',
                ],
            ],
            'writeOnly' => [
                'contentId',
                'uploadedContentId',
            ],
        ],
    ];
}
