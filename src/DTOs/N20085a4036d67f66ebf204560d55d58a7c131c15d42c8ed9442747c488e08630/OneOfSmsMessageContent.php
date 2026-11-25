<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

final class OneOfSmsMessageContent extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsTextMessageContent::class, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsBinaryMessageContent::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.SmsTextMessageContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.SmsBinaryMessageContent',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.LanguageCode' => [
            'kind' => 'string',
            'enum' => [
                'AUTODETECT',
                'ES',
                'NONE',
                'PT',
                'TR',
            ],
        ],
        '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.SmsBinaryMessageContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'object',
                    'properties' => [
                        'dataCoding' => [
                            'kind' => 'integer',
                            'rules' => [
                                'format' => 'int32',
                            ],
                        ],
                        'esmClass' => [
                            'kind' => 'integer',
                            'rules' => [
                                'format' => 'int32',
                            ],
                        ],
                        'hex' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                [
                    'kind' => 'object',
                ],
            ],
        ],
        '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.SmsLanguage' => [
            'kind' => 'object',
            'properties' => [
                'languageCode' => [
                    'kind' => 'reference',
                    'ref' => '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.LanguageCode',
                ],
                'lockingShift' => [
                    'kind' => 'boolean',
                ],
                'singleShift' => [
                    'kind' => 'boolean',
                ],
            ],
        ],
        '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.SmsTextMessageContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'object',
                    'properties' => [
                        'language' => [
                            'kind' => 'reference',
                            'ref' => '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.SmsLanguage',
                        ],
                        'text' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 1,
                            ],
                        ],
                        'transliteration' => [
                            'kind' => 'reference',
                            'ref' => '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.TransliterationCode',
                        ],
                    ],
                ],
                [
                    'kind' => 'object',
                ],
            ],
        ],
        '20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630.TransliterationCode' => [
            'kind' => 'string',
            'enum' => [
                'ALL',
                'BALTIC',
                'BULGARIAN_CYRILLIC',
                'CENTRAL_EUROPEAN',
                'COLOMBIAN',
                'CYRILLIC',
                'GREEK',
                'NONE',
                'NON_UNICODE',
                'PORTUGUESE',
                'SERBIAN_CYRILLIC',
                'TURKISH',
            ],
        ],
    ];
}
