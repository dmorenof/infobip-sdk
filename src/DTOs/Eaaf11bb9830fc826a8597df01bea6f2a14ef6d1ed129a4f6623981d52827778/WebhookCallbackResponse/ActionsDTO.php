<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\WebhookCallbackResponse;

final class ActionsDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureDtmf::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureSpeech::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Dial::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Fetch::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Hangup::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Pause::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Play::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Record::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Say::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SendDtmf::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\StartRecording::class, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\StopRecording::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureDtmf',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureSpeech',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Dial',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Fetch',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Hangup',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Pause',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Play',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Record',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Say',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SendDtmf',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.StartRecording',
        ],
        [
            'kind' => 'reference',
            'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.StopRecording',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallEndpoint' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallEndpointType',
                ],
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallEndpointType' => [
            'kind' => 'string',
            'enum' => [
                'PHONE',
                'SIP',
                'VIBER',
                'WEBRTC',
                'WEBSOCKET',
                'WHATSAPP',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl' => [
            'kind' => 'object',
            'properties' => [
                'method' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MarkupHttpMethod',
                ],
                'url' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'url',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureDtmf' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'captureDtmf',
                    ],
                ],
                'callback' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureDtmfCallbackUrl',
                ],
                'maxLength' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'maximum' => 30,
                        'exclusiveMinimum' => 0,
                        'format' => 'int32',
                    ],
                ],
                'play' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CapturePlayInstruction',
                ],
                'say' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureSayInstruction',
                ],
                'terminator' => [
                    'kind' => 'string',
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
                'action',
                'callback',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureDtmfCallbackUrl' => [
            'kind' => 'object',
            'properties' => [
                'callOnEmpty' => [
                    'kind' => 'boolean',
                ],
                'method' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MarkupHttpMethod',
                ],
                'url' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'url',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CapturePlayInstruction' => [
            'kind' => 'object',
            'properties' => [
                'content' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.PlayContent',
                ],
            ],
            'required' => [
                'content',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureSayInstruction' => [
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
                'text' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'voicePreferences' => [
                    'kind' => 'reference',
                    'ref' => '49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845.VoicePreferences',
                ],
            ],
            'required' => [
                'text',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CaptureSpeech' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'captureSpeech',
                    ],
                ],
                'advancedFormatting' => [
                    'kind' => 'boolean',
                ],
                'callback' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
                'customDictionary' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'keyPhrases' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'language' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'maxSilence' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 5,
                        'format' => 'int32',
                    ],
                ],
                'terminateOnKeyPhrase' => [
                    'kind' => 'boolean',
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
                'action',
                'callback',
                'language',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Dial' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'dial',
                    ],
                ],
                'answerBeforeConnecting' => [
                    'kind' => 'boolean',
                ],
                'callback' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
                'connectTimeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 30,
                        'format' => 'int32',
                    ],
                ],
                'endpointCallback' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
                'endpoints' => [
                    'kind' => 'array',
                    'rules' => [
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallEndpoint',
                    ],
                ],
                'from' => [
                    'kind' => 'string',
                ],
                'hangupOn' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 1,
                    ],
                ],
                'machineDetection' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MachineDetection',
                ],
                'maxDuration' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'recording' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.DialRecording',
                ],
                'ringTone' => [
                    'kind' => 'string',
                ],
                'sendDtmf' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'action',
                'endpoints',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.DialRecording' => [
            'kind' => 'object',
            'properties' => [
                'customData' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'filePrefix' => [
                    'kind' => 'string',
                ],
                'recordingComposition' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingComposition',
                ],
                'recordingStatusCallbackEvents' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingStatusEvent',
                    ],
                ],
                'recordingStatusCallbackUrl' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Fetch' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'fetch',
                    ],
                ],
                'method' => [
                    'kind' => 'string',
                ],
                'url' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'action',
                'url',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.FilePlayContent' => [
            'kind' => 'object',
            'properties' => [
                'fileId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'FILE',
                    ],
                ],
            ],
            'required' => [
                'fileId',
                'type',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Gender' => [
            'kind' => 'string',
            'enum' => [
                'FEMALE',
                'MALE',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Hangup' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'hangup',
                    ],
                ],
                'errorCode' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'action',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MachineDetection' => [
            'kind' => 'object',
            'properties' => [
                'detectionTime' => [
                    'kind' => 'number',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 5,
                    ],
                ],
                'messageDetection' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MessageDetection',
                ],
                'mode' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MachineDetectionMode',
                ],
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MachineDetectionMode' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MachineDetectionModeType',
                ],
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MachineDetectionModeType' => [
            'kind' => 'string',
            'enum' => [
                'ASYNC',
                'SYNC',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MarkupHttpMethod' => [
            'kind' => 'string',
            'enum' => [
                'GET',
                'POST',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.MessageDetection' => [
            'kind' => 'object',
            'properties' => [
                'timeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 60,
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Pause' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'pause',
                    ],
                ],
                'duration' => [
                    'kind' => 'number',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 5,
                    ],
                ],
            ],
            'required' => [
                'action',
                'duration',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Play' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'play',
                    ],
                ],
                'content' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.PlayContent',
                ],
                'loopCount' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'exclusiveMinimum' => 0,
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'action',
                'content',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.PlayContent' => [
            'kind' => 'oneOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.FilePlayContent',
                ],
                [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.UrlPlayContent',
                ],
                [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingPlayContent',
                ],
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Record' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'record',
                    ],
                ],
                'callback' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
                'escapeDtmf' => [
                    'kind' => 'string',
                ],
                'maxSilence' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'playBeep' => [
                    'kind' => 'boolean',
                ],
                'recordingStatusCallbackEvents' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingStatusEvent',
                    ],
                ],
                'recordingStatusCallbackUrl' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
                'timeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'action',
                'callback',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingComposition' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingPlayContent' => [
            'kind' => 'object',
            'properties' => [
                'fileId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'RECORDING',
                    ],
                ],
            ],
            'required' => [
                'fileId',
                'type',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingStatusEvent' => [
            'kind' => 'string',
            'enum' => [
                'completed',
                'in-progress',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Say' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'say',
                    ],
                ],
                'language' => [
                    'kind' => 'string',
                ],
                'loopCount' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'format' => 'int32',
                    ],
                ],
                'speechRate' => [
                    'kind' => 'number',
                    'rules' => [
                        'minimum' => 0.5,
                        'maximum' => 2,
                    ],
                ],
                'text' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'voicePreferences' => [
                    'kind' => 'reference',
                    'ref' => '49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845.VoicePreferences',
                ],
            ],
            'required' => [
                'action',
                'text',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.SendDtmf' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'sendDtmf',
                    ],
                ],
                'dtmf' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
            ],
            'required' => [
                'action',
                'dtmf',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.StartRecording' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'startRecording',
                    ],
                ],
                'playBeep' => [
                    'kind' => 'boolean',
                ],
                'recordingStatusCallbackEvents' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.RecordingStatusEvent',
                    ],
                ],
                'recordingStatusCallbackUrl' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
            ],
            'required' => [
                'action',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.StopRecording' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'enum' => [
                        'stopRecording',
                    ],
                ],
                'callback' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.CallbackUrl',
                ],
            ],
            'required' => [
                'action',
                'callback',
            ],
        ],
        '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.UrlPlayContent' => [
            'kind' => 'object',
            'properties' => [
                'cacheDuration' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'maximum' => 86400,
                        'exclusiveMinimum' => 0,
                        'format' => 'int32',
                    ],
                ],
                'fileUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'URL',
                    ],
                ],
            ],
            'required' => [
                'fileUrl',
                'type',
            ],
        ],
        '49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845.VoicePreferences' => [
            'kind' => 'object',
            'properties' => [
                'voice' => [
                    'kind' => 'string',
                ],
                'voiceGender' => [
                    'kind' => 'reference',
                    'ref' => '287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8.Gender',
                ],
            ],
        ],
    ];
}
