<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

final class OneOfLineOaOutboundMessagePart extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundTextContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundImageContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundLocationContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundVideoContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundAudioContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundStickerContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundImagemapContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundTemplateContent::class, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundFlexContent::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTextContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImageContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundLocationContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundVideoContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundAudioContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundStickerContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImagemapContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTemplateContent',
        ],
        [
            'kind' => 'reference',
            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundFlexContent',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.Area' => [
            'kind' => 'object',
            'properties' => [
                'height' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'format' => 'int32',
                    ],
                ],
                'width' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'format' => 'int32',
                    ],
                ],
                'x' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'format' => 'int32',
                    ],
                ],
                'y' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'height',
                'width',
                'x',
                'y',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.BaseSize' => [
            'kind' => 'object',
            'properties' => [
                'height' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'format' => 'int32',
                    ],
                ],
                'width' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 0,
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'height',
                'width',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.Container' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ContainerType',
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ContainerType' => [
            'kind' => 'string',
            'enum' => [
                'BUBBLE',
                'CAROUSEL',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ExternalLink' => [
            'kind' => 'object',
            'properties' => [
                'label' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 30,
                    ],
                ],
                'linkUri' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 1000,
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ImagemapAction' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ImagemapActionType',
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ImagemapActionType' => [
            'kind' => 'string',
            'enum' => [
                'MESSAGE',
                'URI',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundAudioContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'duration' => [
                            'kind' => 'string',
                        ],
                        'url' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContentType',
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContentType' => [
            'kind' => 'string',
            'enum' => [
                'AUDIO',
                'FLEX',
                'IMAGE',
                'IMAGEMAP',
                'LOCATION',
                'MULTIPART',
                'STICKER',
                'TEMPLATE',
                'TEXT',
                'VIDEO',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundFlexContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'altText' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 400,
                            ],
                        ],
                        'contents' => [
                            'kind' => 'reference',
                            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.Container',
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImageContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'thumbnailUrl' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 1000,
                            ],
                        ],
                        'url' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImagemapContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'actions' => [
                            'kind' => 'array',
                            'rules' => [
                                'minItems' => 1,
                                'maxItems' => 50,
                            ],
                            'items' => [
                                'kind' => 'reference',
                                'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ImagemapAction',
                            ],
                        ],
                        'altText' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 400,
                            ],
                        ],
                        'baseSize' => [
                            'kind' => 'reference',
                            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.BaseSize',
                        ],
                        'baseUrl' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 1000,
                            ],
                        ],
                        'video' => [
                            'kind' => 'reference',
                            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.Video',
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundLocationContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'address' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 1,
                            ],
                        ],
                        'latitude' => [
                            'kind' => 'number',
                            'rules' => [
                                'minimum' => -90,
                                'maximum' => 90,
                            ],
                        ],
                        'longitude' => [
                            'kind' => 'number',
                            'rules' => [
                                'minimum' => -180,
                                'maximum' => 180,
                            ],
                        ],
                        'title' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundStickerContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'packageId' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 1,
                            ],
                        ],
                        'stickerId' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTemplateContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'altText' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 400,
                            ],
                        ],
                        'template' => [
                            'kind' => 'reference',
                            'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineTemplatePayload',
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTextContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'text' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundVideoContent' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundContent',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'thumbnailUrl' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 1000,
                            ],
                        ],
                        'url' => [
                            'kind' => 'string',
                            'rules' => [
                                'minLength' => 0,
                                'maxLength' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineTemplatePayload' => [
            'kind' => 'object',
            'properties' => [
                'type' => [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineTemplatePayloadType',
                ],
            ],
            'required' => [
                'type',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineTemplatePayloadType' => [
            'kind' => 'string',
            'enum' => [
                'BUTTONS',
                'CAROUSEL',
                'CONFIRM',
                'IMAGE_CAROUSEL',
            ],
        ],
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.Video' => [
            'kind' => 'object',
            'properties' => [
                'area' => [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.Area',
                ],
                'externalLink' => [
                    'kind' => 'reference',
                    'ref' => '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.ExternalLink',
                ],
                'originalContentUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 1000,
                    ],
                ],
                'previewImageUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 1000,
                    ],
                ],
            ],
        ],
    ];
    protected const string DISCRIMINATOR_PROPERTY = 'type';
    protected const array DISCRIMINATOR_MAPPING = [
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundAudioContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundAudioContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundFlexContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundFlexContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImageContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImageContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundImagemapContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImagemapContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundLocationContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundLocationContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundStickerContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundStickerContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTemplateContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTemplateContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundTextContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTextContent',
        '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LineOaOutboundVideoContent' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundVideoContent',
        'AUDIO' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundAudioContent',
        'FLEX' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundFlexContent',
        'IMAGE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImageContent',
        'IMAGEMAP' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundImagemapContent',
        'LOCATION' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundLocationContent',
        'STICKER' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundStickerContent',
        'TEMPLATE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTemplateContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundTextContent',
        'VIDEO' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaOutboundVideoContent',
    ];
}
