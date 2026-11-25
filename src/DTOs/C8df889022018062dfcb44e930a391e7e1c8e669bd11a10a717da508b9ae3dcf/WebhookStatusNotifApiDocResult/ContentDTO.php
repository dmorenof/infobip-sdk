<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookStatusNotifApiDocResult;

final class ContentDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaWebhookStatusNotifApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberWebhookStatusNotifApiDoc::class, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsWebhookStatusNotifApiDoc::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaWebhookStatusNotifApiDoc',
        ],
        [
            'kind' => 'reference',
            'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberWebhookStatusNotifApiDoc',
        ],
        [
            'kind' => 'reference',
            'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsWebhookStatusNotifApiDoc',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaWebhookFeedbackApiDoc' => [
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
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaWebhookStatusNotifApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'additionalRequirements' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.WebhookRequirementSpecApiDoc',
                    ],
                ],
                'feedback' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.AlphaWebhookFeedbackApiDoc',
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                ],
                'note' => [
                    'kind' => 'string',
                ],
                'requirementsFeedback' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedbackApiDoc',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'COMPLETED',
                        'EXPIRED',
                        'REJECTED',
                        'UPDATE_REQUESTED',
                        'UPDATE_REQUESTED_BY_INTERNAL_REVIEWER',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'ALPHANUMERIC_REGISTRATION',
                    ],
                ],
            ],
            'required' => [
                'id',
                'status',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Category' => [
            'kind' => 'string',
            'enum' => [
                'BUSINESS_DETAILS',
                'CONFIRMATION',
                'CONTACT_INFORMATION',
                'CUSTOMER_SUPPORT_INFORMATION',
                'MARKET_SPECIFIC_DETAILS',
                'OTHER',
                'USE_CASE_DETAILS',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.DocumentType' => [
            'kind' => 'string',
            'enum' => [
                'PREFILLED_DOCUMENT',
                'SAMPLE',
                'TEMPLATE',
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
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedbackApiDoc' => [
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
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberStatus' => [
            'kind' => 'string',
            'enum' => [
                'SUCCESS',
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.NumberWebhookStatusNotifApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'id' => [
                    'kind' => 'string',
                ],
                'note' => [
                    'kind' => 'string',
                ],
                'numbers' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.ProcuredNumber',
                    ],
                ],
                'requirementsFeedback' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedbackApiDoc',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'COMPLETED',
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
            'required' => [
                'id',
                'status',
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
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsWebhookFeedbackApiDoc' => [
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
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsWebhookStatusNotifApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'feedback' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.RcsWebhookFeedbackApiDoc',
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                ],
                'note' => [
                    'kind' => 'string',
                ],
                'requirementsFeedback' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FilledRequirementFeedbackApiDoc',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'COMPLETED',
                        'EXPIRED',
                        'REJECTED',
                        'UPDATE_REQUESTED',
                        'UPDATE_REQUESTED_BY_INTERNAL_REVIEWER',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'RCS_SENDER_LAUNCH',
                    ],
                ],
            ],
            'required' => [
                'id',
                'status',
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
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.WebhookAttachmentApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'documentId' => [
                    'kind' => 'string',
                ],
                'documentType' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.DocumentType',
                ],
            ],
        ],
        'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.WebhookRequirementSpecApiDoc' => [
            'kind' => 'object',
            'properties' => [
                'attachment' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.WebhookAttachmentApiDoc',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.Category',
                ],
                'description' => [
                    'kind' => 'string',
                ],
                'key' => [
                    'kind' => 'string',
                ],
                'multipleValuesSupported' => [
                    'kind' => 'boolean',
                ],
                'name' => [
                    'kind' => 'string',
                ],
                'required' => [
                    'kind' => 'boolean',
                ],
                'type' => [
                    'kind' => 'reference',
                    'ref' => 'c8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf.FieldType',
                ],
            ],
        ],
    ];
}
