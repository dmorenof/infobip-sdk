<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

final class OneOfIbResourceInfo extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResourceInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AlphaResourceInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\RcsResourceInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ViberResourceInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AppleResourceInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\OpenChannelResourceInfo::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberResourceInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AlphaResourceInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsResourceInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberResourceInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleResourceInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelResourceInfo',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AlphaResourceInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[A-Z]{2}$',
                    ],
                ],
                'countryName' => [
                    'kind' => 'string',
                ],
                'resourceType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType',
                ],
                'senderName' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleResourceInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[A-Z]{2}$',
                    ],
                ],
                'countryName' => [
                    'kind' => 'string',
                ],
                'displayName' => [
                    'kind' => 'string',
                ],
                'resource' => [
                    'kind' => 'string',
                ],
                'resourceType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType' => [
            'kind' => 'string',
            'enum' => [
                'ALPHANUMERIC',
                'APPLE_RESOURCE',
                'FACEBOOK_RESOURCE',
                'KAKAO_RESOURCE',
                'NUMBER',
                'OPEN_CHANNEL_RESOURCE',
                'RCS_RESOURCE',
                'VIBER_RESOURCE',
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberResourceInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[A-Z]{2}$',
                    ],
                ],
                'countryName' => [
                    'kind' => 'string',
                ],
                'number' => [
                    'kind' => 'string',
                ],
                'numberKey' => [
                    'kind' => 'string',
                ],
                'numberType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberTypeResourceMoDocs',
                ],
                'platform' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.PlatformDocs',
                ],
                'resourceType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberTypeResourceMoDocs' => [
            'kind' => 'string',
            'enum' => [
                'SHORT_CODE',
                'VIRTUAL_LONG_NUMBER',
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelResourceInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                    ],
                ],
                'resource' => [
                    'kind' => 'string',
                ],
                'resourceType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.PlatformDocs' => [
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsResourceInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[A-Z]{2}$',
                    ],
                ],
                'countryName' => [
                    'kind' => 'string',
                ],
                'resourceType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType',
                ],
                'senderName' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel' => [
            'kind' => 'string',
            'enum' => [
                'APPLE_MB',
                'FACEBOOK_POSTS',
                'KAKAO_ALIM',
                'KAKAO_CHINGU',
                'KAKAO_SANGDAM',
                'MESSENGER',
                'MMS',
                'OPEN_CHANNEL',
                'RCS',
                'SMS',
                'VIBER_BM',
                'VIBER_BOT',
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberResourceInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                    ],
                ],
                'countryCode' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[A-Z]{2}$',
                    ],
                ],
                'countryName' => [
                    'kind' => 'string',
                ],
                'originalResourceName' => [
                    'kind' => 'string',
                ],
                'resource' => [
                    'kind' => 'string',
                ],
                'resourceType' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceType',
                ],
                'shared' => [
                    'kind' => 'boolean',
                ],
            ],
        ],
    ];
}
