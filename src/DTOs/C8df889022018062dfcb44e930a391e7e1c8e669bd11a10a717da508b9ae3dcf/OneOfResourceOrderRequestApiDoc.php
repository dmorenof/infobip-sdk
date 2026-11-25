<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

final class OneOfResourceOrderRequestApiDoc extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderRequestApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderRequestApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderRequestApiDoc::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderRequestApiDoc',
        ],
        [
            'kind' => 'reference',
            'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberResourceOrderRequestApiDoc',
        ],
        [
            'kind' => 'reference',
            'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderRequestApiDoc',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaFeatureOptInsApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'documentPrefill' => [
                    'kind' => 'boolean',
                ],
                'structuredFeedback' => [
                    'kind' => 'boolean',
                ],
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderRequestApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'additionalContactEmails' => [
                    'kind' => 'array',
                    'rules' => [
                        'minItems' => 0,
                        'maxItems' => 3,
                    ],
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                ],
                'featureOptIns' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaFeatureOptInsApiDoc',
                ],
                'platform' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform',
                ],
                'requirements' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement',
                    ],
                ],
                'senderName' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 3,
                        'maxLength' => 11,
                    ],
                ],
                'trafficOrigin' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.TrafficOrigin',
                ],
                'trafficType' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.TrafficType',
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'ALPHANUMERIC_REGISTRATION',
                    ],
                ],
            ],
            'required' => [
                'countryCode',
                'requirements',
                'senderName',
                'type',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement' => [
            'kind' => 'object',
            'properties' => [
                'key' => [
                    'kind' => 'string',
                ],
                'value' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.JsonNode',
                ],
            ],
            'required' => [
                'key',
                'value',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.JsonNode' => [
            'kind' => 'object',
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberOfferClientType' => [
            'kind' => 'string',
            'enum' => [
                'INTERNATIONAL',
                'LOCAL',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberResourceOrderRequestApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'additionalContactEmails' => [
                    'kind' => 'array',
                    'rules' => [
                        'minItems' => 0,
                        'maxItems' => 3,
                    ],
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'capabilities' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceNumberCapability',
                    ],
                ],
                'clientType' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberOfferClientType',
                ],
                'countryCode' => [
                    'kind' => 'string',
                ],
                'numberType' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceNumberType',
                ],
                'platform' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform',
                ],
                'quantity' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 49,
                        'format' => 'int32',
                    ],
                ],
                'requirements' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'NUMBER_PURCHASE',
                    ],
                ],
            ],
            'required' => [
                'capabilities',
                'countryCode',
                'numberType',
                'type',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform' => [
            'kind' => 'object',
            'properties' => [
                'applicationId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'entityId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderFeatureOptInsApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'senderInfoUpdates' => [
                    'kind' => 'boolean',
                ],
                'structuredFeedback' => [
                    'kind' => 'boolean',
                ],
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderRequestApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'additionalContactEmails' => [
                    'kind' => 'array',
                    'rules' => [
                        'minItems' => 0,
                        'maxItems' => 3,
                    ],
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                ],
                'excludedCarriers' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'featureOptIns' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderFeatureOptInsApiDoc',
                ],
                'platform' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform',
                ],
                'requirements' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement',
                    ],
                ],
                'senderName' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'trafficOrigin' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.TrafficOrigin',
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'RCS_SENDER_LAUNCH',
                    ],
                ],
            ],
            'required' => [
                'countryCode',
                'requirements',
                'senderName',
                'trafficOrigin',
                'type',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceNumberCapability' => [
            'kind' => 'string',
            'enum' => [
                'MMS',
                'SMS',
                'VOICE',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceNumberType' => [
            'kind' => 'string',
            'enum' => [
                'SHORT_CODE',
                'TEN_DIGIT_LONG_CODE',
                'TOLL_FREE_NUMBER',
                'VIRTUAL_LONG_NUMBER',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.TrafficOrigin' => [
            'kind' => 'string',
            'enum' => [
                'INTERNATIONAL',
                'LOCAL',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.TrafficType' => [
            'kind' => 'string',
            'enum' => [
                'PROMOTIONAL',
                'TRANSACTIONAL',
            ],
        ],
    ];
    protected const string DISCRIMINATOR_PROPERTY = 'type';
    protected const array DISCRIMINATOR_MAPPING = [
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderRequestApiDoc' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\AlphaResourceOrderRequestApiDoc',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberResourceOrderRequestApiDoc' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\NumberResourceOrderRequestApiDoc',
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderRequestApiDoc' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\RcsSenderResourceOrderRequestApiDoc',
    ];
}
