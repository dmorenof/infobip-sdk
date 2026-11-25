<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

final class OneOfMessagesApiBaseFailover extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiFailover::class, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateFailover::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiFailover',
    ],
    [
        'kind' => 'reference',
        'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateFailover',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiFailover' => [
        'kind' => 'object',
        'properties' => [
            'channel' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.OutboundMessageChannel',
            ],
            'content' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageContent',
            ],
            'sender' => [
                'kind' => 'string',
            ],
            'validityPeriod' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.ValidityPeriod',
            ],
        ],
        'required' => [
            'channel',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageBody' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageBodyType',
            ],
        ],
        'required' => [
            'type',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageBodyType' => [
        'kind' => 'string',
        'enum' => [
            'AUTHENTICATION_REQUEST',
            'CAROUSEL',
            'CONTACT',
            'DOCUMENT',
            'FLOW',
            'FORM',
            'IMAGE',
            'LIST',
            'LOCATION',
            'MIXED',
            'ORDER_REQUEST',
            'ORDER_STATUS',
            'PRODUCT',
            'RICH_LINK',
            'STICKER',
            'TEXT',
            'TIME_PICKER',
            'VIDEO',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageButton' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageButtonType',
            ],
        ],
        'required' => [
            'type',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageButtonType' => [
        'kind' => 'string',
        'enum' => [
            'ADD_CALENDAR_EVENT',
            'DIAL_PHONE',
            'OPEN_URL',
            'REPLY',
            'REQUEST_LOCATION',
            'SHOW_LOCATION',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageConfirmationBody' => [
        'kind' => 'object',
        'properties' => [
            'description' => [
                'kind' => 'string',
            ],
            'imageUrl' => [
                'kind' => 'string',
                'rules' => [
                    'pattern' => '',
                ],
            ],
            'text' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
        ],
        'required' => [
            'text',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageContent' => [
        'kind' => 'object',
        'properties' => [
            'body' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageBody',
            ],
            'buttons' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageButton',
                ],
            ],
            'confirmationBody' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageConfirmationBody',
            ],
            'footer' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageFooter',
            ],
            'header' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageHeader',
            ],
            'senderDisplayInfo' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageSenderDisplayInfo',
            ],
        ],
        'required' => [
            'body',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageFooter' => [
        'kind' => 'object',
        'properties' => [
            'text' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
        ],
        'required' => [
            'text',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageHeader' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageHeaderType',
            ],
        ],
        'required' => [
            'type',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageHeaderType' => [
        'kind' => 'string',
        'enum' => [
            'TEXT',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageSenderDisplayInfo' => [
        'kind' => 'object',
        'properties' => [
            'avatarUrl' => [
                'kind' => 'string',
                'rules' => [
                    'pattern' => '',
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 28,
                ],
            ],
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplate' => [
        'kind' => 'object',
        'properties' => [
            'groupKey' => [
                'kind' => 'string',
            ],
            'language' => [
                'kind' => 'string',
            ],
            'referenceId' => [
                'kind' => 'string',
            ],
            'templateName' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                ],
            ],
        ],
        'required' => [
            'templateName',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateBody' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateBodyType',
            ],
        ],
        'required' => [
            'type',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateBodyType' => [
        'kind' => 'string',
        'enum' => [
            'CAROUSEL',
            'TEXT',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateButton' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateButtonType',
            ],
        ],
        'required' => [
            'type',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateButtonType' => [
        'kind' => 'string',
        'enum' => [
            'ADD_CHANNEL',
            'APP_LINK',
            'BOT_KEYWORD',
            'CATALOG',
            'CHATBOT_SWITCH',
            'COPY_CODE',
            'DELIVERY_TRACKING',
            'FLOW',
            'MESSAGE_DELIVERY',
            'MULTI_PRODUCT',
            'OPEN_URL',
            'PHONE_NUMBER',
            'QUICK_REPLY',
            'URL_WITH_TEXT',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateFailover' => [
        'kind' => 'object',
        'properties' => [
            'channel' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.OutboundTemplateChannel',
            ],
            'content' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateMessageContent',
            ],
            'sender' => [
                'kind' => 'string',
            ],
            'template' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplate',
            ],
            'validityPeriod' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.ValidityPeriod',
            ],
        ],
        'required' => [
            'channel',
            'template',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateHeader' => [
        'kind' => 'object',
        'properties' => [
            'type' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateHeaderType',
            ],
        ],
        'required' => [
            'type',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateHeaderType' => [
        'kind' => 'string',
        'enum' => [
            'DOCUMENT',
            'IMAGE',
            'LOCATION',
            'TEXT',
            'VIDEO',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateMessageContent' => [
        'kind' => 'object',
        'properties' => [
            'body' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateBody',
            ],
            'buttons' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateButton',
                ],
            ],
            'expirationTime' => [
                'kind' => 'string',
            ],
            'header' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiTemplateHeader',
            ],
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.OutboundMessageChannel' => [
        'kind' => 'string',
        'enum' => [
            'APPLE_MB',
            'INSTAGRAM_DM',
            'LINE_ON',
            'MESSENGER',
            'MMS',
            'RCS',
            'SMS',
            'VIBER_BM',
            'VIBER_BOT',
            'WHATSAPP',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.OutboundTemplateChannel' => [
        'kind' => 'string',
        'enum' => [
            'APPLE_MB',
            'KAKAO_ALIM',
            'RCS',
            'VIBER_BM',
            'WHATSAPP',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.ValidityPeriod' => [
        'kind' => 'object',
        'properties' => [
            'amount' => [
                'kind' => 'integer',
                'rules' => [
                    'minimum' => 0,
                    'exclusiveMinimum' => 0,
                    'format' => 'int32',
                ],
            ],
            'timeUnit' => [
                'kind' => 'reference',
                'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.ValidityPeriodTimeUnit',
            ],
        ],
        'required' => [
            'amount',
        ],
    ],
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.ValidityPeriodTimeUnit' => [
        'kind' => 'string',
        'enum' => [
            'HOURS',
            'MINUTES',
            'SECONDS',
        ],
    ],
];
}
