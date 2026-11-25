<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\PageResourceOrderApiDoc;

final class ResultsDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderApiDoc::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderApiDoc',
    ],
    [
        'kind' => 'reference',
        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberResourceOrderApiDoc',
    ],
    [
        'kind' => 'reference',
        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderApiDoc',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'additionalContactEmailAddresses' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'string',
                ],
            ],
            'additionalRequirements' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RequirementSpec',
                ],
            ],
            'countryCode' => [
                'kind' => 'string',
            ],
            'feedback' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderFeedbackApiDoc',
                ],
            ],
            'id' => [
                'kind' => 'string',
            ],
            'note' => [
                'kind' => 'string',
            ],
            'platform' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform',
            ],
            'requestedByEmailAddress' => [
                'kind' => 'string',
            ],
            'requestedDate' => [
                'kind' => 'string',
            ],
            'requirements' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement',
                ],
            ],
            'requirementsFeedback' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedback',
                ],
            ],
            'senderName' => [
                'kind' => 'string',
            ],
            'status' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceOrderStatus',
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
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaResourceOrderFeedbackApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'errors' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceOrderFeedbackError',
                ],
            ],
            'requirementKey' => [
                'kind' => 'string',
            ],
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FeedbackCode' => [
        'kind' => 'string',
        'enum' => [
            'RES_REQ_FEED_FORMAT',
            'RES_REQ_FEED_LENGTH_OOR',
            'RES_REQ_FEED_OTHER',
            'RES_REQ_FEED_REQUIRED',
            'RES_REQ_FEED_VALUE_OOR',
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FieldType' => [
        'kind' => 'string',
        'enum' => [
            'DOCUMENT',
            'EMAIL',
            'GSM',
            'INTEGER',
            'TEXT',
            'URL',
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
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedback' => [
        'kind' => 'object',
        'properties' => [
            'code' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FeedbackCode',
            ],
            'feedback' => [
                'kind' => 'string',
            ],
            'key' => [
                'kind' => 'string',
            ],
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.JsonNode' => [
        'kind' => 'object',
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberResourceOrderApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'additionalContactEmailAddresses' => [
                'kind' => 'array',
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
            'countryCode' => [
                'kind' => 'string',
            ],
            'id' => [
                'kind' => 'string',
            ],
            'note' => [
                'kind' => 'string',
            ],
            'numberType' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceNumberType',
            ],
            'numbers' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ProcuredNumber',
                ],
            ],
            'platform' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform',
            ],
            'quantity' => [
                'kind' => 'integer',
                'rules' => [
                    'format' => 'int32',
                ],
            ],
            'requestedByEmailAddress' => [
                'kind' => 'string',
            ],
            'requestedDate' => [
                'kind' => 'string',
            ],
            'requirements' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement',
                ],
            ],
            'requirementsFeedback' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedback',
                ],
            ],
            'status' => [
                'kind' => 'string',
                'enum' => [
                    'AUTOMATIC_VALIDATION',
                    'CANCELED',
                    'COMPLETED',
                    'IN_PROGRESS',
                    'IN_REVIEW',
                    'PENDING',
                    'PENDING_REVIEW',
                    'REJECTED',
                    'UPDATE_REQUESTED',
                    'UPDATE_REQUESTED_BY_INTERNAL_REVIEWER',
                ],
            ],
            'type' => [
                'kind' => 'string',
                'enum' => [
                    'NUMBER_PURCHASE',
                ],
            ],
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberStatus' => [
        'kind' => 'string',
        'enum' => [
            'SUCCESS',
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
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ProcuredNumber' => [
        'kind' => 'object',
        'properties' => [
            'number' => [
                'kind' => 'string',
            ],
            'numberKey' => [
                'kind' => 'string',
            ],
            'status' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberStatus',
            ],
        ],
        'required' => [
            'number',
            'status',
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'additionalContactEmails' => [
                'kind' => 'array',
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
            'feedback' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderFeedbackApiDoc',
                ],
            ],
            'id' => [
                'kind' => 'string',
            ],
            'note' => [
                'kind' => 'string',
            ],
            'platform' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Platform',
            ],
            'requestedByEmailAddress' => [
                'kind' => 'string',
            ],
            'requestedDate' => [
                'kind' => 'string',
            ],
            'requirements' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirement',
                ],
            ],
            'requirementsFeedback' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedback',
                ],
            ],
            'senderName' => [
                'kind' => 'string',
            ],
            'status' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceOrderStatus',
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
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsSenderResourceOrderFeedbackApiDoc' => [
        'kind' => 'object',
        'properties' => [
            'errors' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceOrderFeedbackError',
                ],
            ],
            'externalRequirementKey' => [
                'kind' => 'string',
            ],
            'requirementKey' => [
                'kind' => 'string',
            ],
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RequirementSpec' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FieldType',
            ],
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
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceOrderFeedbackError' => [
        'kind' => 'object',
        'properties' => [
            'details' => [
                'kind' => 'string',
            ],
            'key' => [
                'kind' => 'string',
            ],
            'reason' => [
                'kind' => 'string',
            ],
        ],
    ],
    'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ResourceOrderStatus' => [
        'kind' => 'string',
        'enum' => [
            'AUTOMATIC_VALIDATION',
            'CANCELED',
            'COMPLETED',
            'EXPIRED',
            'IN_PROGRESS',
            'IN_REVIEW',
            'PENDING',
            'PENDING_REVIEW',
            'REJECTED',
            'UPDATE_REQUESTED',
            'UPDATE_REQUESTED_BY_INTERNAL_REVIEWER',
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
}
