<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

final class OneOfRequirementSpecsRequestApiDoc extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaRequirementSpecsRequestApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberRequirementSpecsRequestApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsRequirementSpecsRequestApiDoc::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaRequirementSpecsRequestApiDoc',
    ],
    [
        'kind' => 'reference',
        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberRequirementSpecsRequestApiDoc',
    ],
    [
        'kind' => 'reference',
        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsRequirementSpecsRequestApiDoc',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaRequirementSpecsFeatureOptInsApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'documentPrefill' => [
                'kind' => 'boolean',
            ],
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaRequirementSpecsRequestApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'countryCode' => [
                'kind' => 'string',
            ],
            'featureOptIns' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaRequirementSpecsFeatureOptInsApiDoc',
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
            'type',
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberOfferClientType' => [
        'kind' => 'string',
        'enum' => [
            'INTERNATIONAL',
            'LOCAL',
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberRequirementSpecsRequestApiDoc' => [
        'kind' => 'object',
        'properties' => [
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
            'quantity' => [
                'kind' => 'integer',
                'rules' => [
                    'minimum' => 1,
                    'maximum' => 49,
                    'format' => 'int32',
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
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsRequirementSpecsRequestApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'countryCode' => [
                'kind' => 'string',
            ],
            'excludedCarriers' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'string',
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
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaRequirementSpecsRequestApiDoc' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\AlphaRequirementSpecsRequestApiDoc',
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberRequirementSpecsRequestApiDoc' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\NumberRequirementSpecsRequestApiDoc',
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsRequirementSpecsRequestApiDoc' => 'InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\RcsRequirementSpecsRequestApiDoc',
];
}
