<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioResponse;

final class ScriptDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CallApi::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Capture::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Collect::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Dial::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DialToMany::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DialToConversations::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\ForEachN13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GoToN13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a::class, \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Hangup::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IfThenElse::class, \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\MachineDetection::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Pause::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Play::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayFromRecording::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayFromUpload::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayTty::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Record::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RepeatWhile::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Say::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendSms::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SetVariable::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SwitchCase::class, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\WhileDo::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CallApi',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Capture',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Collect',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Dial',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToMany',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToConversations',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.ForEach',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.GoTo',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Hangup',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.IfThenElse',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.MachineDetection',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AnsweringMachineDetection',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Pause',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Play',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayFromRecording',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayFromUpload',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayTty',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Record',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.RepeatWhile',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Say',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendSms',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SetVariable',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SwitchCase',
        ],
        [
            'kind' => 'reference',
            'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.WhileDo',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AnsweringMachineDetection' => [
            'kind' => 'object',
            'properties' => [
                'answeringMachineDetection' => [
                    'kind' => 'boolean',
                ],
                'onDetecting' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'onHumanDetected' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'onMachineDetected' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'onTimeout' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AnsweringMachineDetectionOptions',
                ],
            ],
            'required' => [
                'answeringMachineDetection',
                'onMachineDetected',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AnsweringMachineDetectionOptions' => [
            'kind' => 'object',
            'properties' => [
                'endOfMessageDetectionTimeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 60,
                        'format' => 'int32',
                    ],
                ],
                'waitEndOfMessageDetection' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.WaitForEom',
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AudioContent' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AudioContentType',
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AudioContentType' => [
            'kind' => 'string',
            'enum' => [
                'FILE',
                'URL',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CallApi' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CallApiOptions',
                ],
                'request' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'options',
                'request',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CallApiOptions' => [
            'kind' => 'object',
            'properties' => [
                'body' => [
                    'kind' => 'string',
                ],
                'collectResponse' => [
                    'kind' => 'boolean',
                ],
                'headers' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'method' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.HttpMethod',
                ],
            ],
            'required' => [
                'body',
                'method',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Capture' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'beep' => [
                    'kind' => 'boolean',
                ],
                'capture' => [
                    'kind' => 'string',
                ],
                'dtmfOptions' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DtmfOptions',
                ],
                'sendToReports' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendToReports',
                ],
                'speechOptions' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SpeechOptions',
                ],
                'timeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 30,
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'capture',
                'speechOptions',
                'timeout',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CaseObject' => [
            'kind' => 'object',
            'properties' => [
                '__default' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Collect' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'collectInto' => [
                    'kind' => 'string',
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CollectOptions',
                ],
            ],
            'required' => [
                'collectInto',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CollectOptions' => [
            'kind' => 'object',
            'properties' => [
                'mappedValues' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'maxInputLength' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 64,
                        'format' => 'int32',
                    ],
                ],
                'sendToReports' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendToReports',
                ],
                'timeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'maximum' => 30,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CustomRingback' => [
            'kind' => 'object',
            'properties' => [
                'failedAudio' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AudioContent',
                ],
                'ringingAudio' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.AudioContent',
                ],
            ],
            'required' => [
                'ringingAudio',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Dial' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'dial' => [
                    'kind' => 'string',
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialOptions',
                ],
            ],
            'required' => [
                'dial',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialOptions' => [
            'kind' => 'object',
            'properties' => [
                'customRingback' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CustomRingback',
                ],
                'maxCallDuration' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'format' => 'int32',
                    ],
                ],
                'senderId' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToConversations' => [
            'kind' => 'object',
            'properties' => [
                'dialToConversations' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToConversationsData',
                ],
            ],
            'required' => [
                'dialToConversations',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToConversationsData' => [
            'kind' => 'object',
            'properties' => [
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToConversationsOptions',
                ],
            ],
            'required' => [
                'options',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToConversationsOptions' => [
            'kind' => 'object',
            'properties' => [
                'tagIdentifierType' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.TagIdentifierType',
                ],
                'tags' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
            ],
            'required' => [
                'tags',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToMany' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'dialToMany' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Numbers',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToManyOptions',
                ],
            ],
            'required' => [
                'dialToMany',
                'options',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DialToManyOptions' => [
            'kind' => 'object',
            'properties' => [
                'maxCallDuration' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'format' => 'int32',
                    ],
                ],
                'parallel' => [
                    'kind' => 'boolean',
                ],
                'senderId' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.DtmfOptions' => [
            'kind' => 'object',
            'properties' => [
                'mappedValues' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'maxInputLength' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 64,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.ForEach' => [
            'kind' => 'object',
            'properties' => [
                'delimiter' => [
                    'kind' => 'string',
                ],
                'do' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'for-each' => [
                    'kind' => 'string',
                ],
                'in' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'do',
                'for-each',
                'in',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.GoTo' => [
            'kind' => 'object',
            'properties' => [
                'goTo' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.GoToOptions',
                ],
            ],
            'required' => [
                'goTo',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.GoToOptions' => [
            'kind' => 'object',
            'properties' => [
                'countVariable' => [
                    'kind' => 'string',
                ],
                'goToLimit' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 100,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Hangup' => [
            'kind' => 'string',
            'enum' => [
                'hangup',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.HttpMethod' => [
            'kind' => 'string',
            'enum' => [
                'DELETE',
                'GET',
                'PATCH',
                'POST',
                'PUT',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.IfThenElse' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'else' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'if' => [
                    'kind' => 'string',
                ],
                'then' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
            ],
            'required' => [
                'if',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.MachineDetection' => [
            'kind' => 'string',
            'enum' => [
                'machineDetection',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Numbers' => [
            'kind' => 'object',
            'properties' => [
                'number' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'number',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Pause' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'pause' => [
                    'kind' => 'number',
                    'rules' => [
                        'minimum' => 0,
                        'maximum' => 5,
                        'exclusiveMinimum' => 0,
                    ],
                ],
            ],
            'required' => [
                'pause',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Play' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayOptions',
                ],
                'playFromUrl' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'playFromUrl',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayFromRecording' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'playFromRecording' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'playFromRecording',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayFromUpload' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayFromUploadOptions',
                ],
                'playFromUpload' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'playFromUpload',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayFromUploadOptions' => [
            'kind' => 'object',
            'properties' => [
                'loopCount' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 10,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayOptions' => [
            'kind' => 'object',
            'properties' => [
                'loopCount' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 10,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayTty' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayTtyOptions',
                ],
                'playTty' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'playTty',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.PlayTtyOptions' => [
            'kind' => 'object',
            'properties' => [
                'loopCount' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 10,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Record' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.RecordOptions',
                ],
                'record' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'record',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.RecordOptions' => [
            'kind' => 'object',
            'properties' => [
                'beep' => [
                    'kind' => 'boolean',
                ],
                'escapeDigits' => [
                    'kind' => 'string',
                ],
                'identifier' => [
                    'kind' => 'string',
                ],
                'maxSilence' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.RepeatWhile' => [
            'kind' => 'object',
            'properties' => [
                'repeat' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'while' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'repeat',
                'while',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.Say' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SayOptions',
                ],
                'say' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'say',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SayOptions' => [
            'kind' => 'object',
            'properties' => [
                'language' => [
                    'kind' => 'string',
                ],
                'speechRate' => [
                    'kind' => 'number',
                    'rules' => [
                        'minimum' => 0.5,
                        'maximum' => 2,
                    ],
                ],
                'voice' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.VoiceOptions',
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendSms' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'sendSms' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendSmsData',
                ],
            ],
            'required' => [
                'sendSms',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendSmsData' => [
            'kind' => 'object',
            'properties' => [
                'from' => [
                    'kind' => 'string',
                ],
                'text' => [
                    'kind' => 'string',
                ],
                'to' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'from',
                'text',
                'to',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SendToReports' => [
            'kind' => 'string',
            'enum' => [
                'ALWAYS',
                'MASKED',
                'NEVER',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SetVariable' => [
            'kind' => 'object',
            'properties' => [
                'setVariable' => [
                    'kind' => 'string',
                ],
                'value' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'setVariable',
                'value',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SpeechOptions' => [
            'kind' => 'object',
            'properties' => [
                'keyPhrases' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'language' => [
                    'kind' => 'string',
                ],
                'maxSilence' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 5,
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'language',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.SwitchCase' => [
            'kind' => 'object',
            'properties' => [
                'actionId' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'case' => [
                    'kind' => 'reference',
                    'ref' => '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.CaseObject',
                ],
                'switch' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'case',
                'switch',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.TagIdentifierType' => [
            'kind' => 'string',
            'enum' => [
                'ID',
                'NAME',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.VoiceOptions' => [
            'kind' => 'object',
            'properties' => [
                'gender' => [
                    'kind' => 'string',
                ],
                'name' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.WaitForEom' => [
            'kind' => 'string',
            'enum' => [
                'ALWAYS',
                'NEVER',
                'ON_DETECTING',
            ],
        ],
        '13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a.WhileDo' => [
            'kind' => 'object',
            'properties' => [
                'do' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'object',
                    ],
                ],
                'while' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'do',
                'while',
            ],
        ],
    ];
}
