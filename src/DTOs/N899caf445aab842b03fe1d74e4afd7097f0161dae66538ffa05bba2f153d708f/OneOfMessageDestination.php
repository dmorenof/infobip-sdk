<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

final class OneOfMessageDestination extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiChannelsDestination::class, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiToDestination::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiChannelsDestination',
        ],
        [
            'kind' => 'reference',
            'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiToDestination',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.Channel' => [
            'kind' => 'string',
            'enum' => [
                'APPLE_MB',
                'INSTAGRAM_DM',
                'KAKAO_ALIM',
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
        '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiChannelDestination' => [
            'kind' => 'object',
            'properties' => [
                'channel' => [
                    'kind' => 'reference',
                    'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.Channel',
                ],
                'messageId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 200,
                    ],
                ],
                'to' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'channel',
                'to',
            ],
        ],
        '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiChannelsDestination' => [
            'kind' => 'object',
            'properties' => [
                'byChannel' => [
                    'kind' => 'array',
                    'rules' => [
                        'minItems' => 1,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiChannelDestination',
                    ],
                ],
                'messageId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 200,
                    ],
                ],
            ],
            'required' => [
                'byChannel',
            ],
        ],
        '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiToDestination' => [
            'kind' => 'object',
            'properties' => [
                'messageId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 200,
                    ],
                ],
                'to' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'to',
            ],
        ],
    ];
}
