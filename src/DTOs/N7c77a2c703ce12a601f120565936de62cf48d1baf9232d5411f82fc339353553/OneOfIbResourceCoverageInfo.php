<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

final class OneOfIbResourceCoverageInfo extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AlphaCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\RcsCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ViberCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AppleCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\OpenChannelCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\KakaoCoverageInfo::class, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\FacebookCoverageInfo::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AlphaCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.KakaoCoverageInfo',
        ],
        [
            'kind' => 'reference',
            'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.FacebookCoverageInfo',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AlphaCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
            'required' => [
                'countryCode',
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.FacebookCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability' => [
            'kind' => 'object',
            'properties' => [
                'channel' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ResourceCapabilityChannel',
                ],
                'coverage' => [
                    'kind' => 'reference',
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCoverage',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCoverage' => [
            'kind' => 'object',
            'properties' => [
                'inbound' => [
                    'kind' => 'boolean',
                ],
                'outbound' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NetworkView',
                    ],
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.KakaoCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NetworkView' => [
            'kind' => 'object',
            'properties' => [
                'mccNnc' => [
                    'kind' => 'string',
                ],
                'networkName' => [
                    'kind' => 'string',
                ],
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
                    'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberType',
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.NumberType' => [
            'kind' => 'string',
            'enum' => [
                'FACEBOOK',
                'KAKAO_SANGDAM',
                'OPEN_CHANNEL',
                'RCS',
                'SHORT_CODE',
                'SHORT_CODE_USSD',
                'SIM_HOSTING',
                'TELEGRAM',
                'VIBER',
                'VIBER_VOICE',
                'VIRTUAL_LONG_NUMBER',
                'VIRTUAL_LONG_NUMBER_CALL_TRIGGER',
                'VIRTUAL_SIM_HOSTING',
                'WHATSAPP',
                'ZALO_FOLLOWER',
                'ZALO_ZMS',
            ],
        ],
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
                    ],
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberCoverageInfo' => [
            'kind' => 'object',
            'properties' => [
                'capabilities' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                    ],
                    'items' => [
                        'kind' => 'reference',
                        'ref' => '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.IbResourceCapability',
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
