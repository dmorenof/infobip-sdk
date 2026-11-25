<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

final class OneOfCredentialsPayload extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\BasicCredentialsPayload::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\HmacCredentialsPayload::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OauthCredentialsPayload::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BasicCredentialsPayload',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacCredentialsPayload',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OauthCredentialsPayload',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BasicCredentialsPayload' => [
            'kind' => 'object',
            'properties' => [
                'password' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'username' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'required' => [
                'password',
                'username',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacAlgorithm' => [
            'kind' => 'string',
            'enum' => [
                'HMAC_MD5',
                'HMAC_SHA_1',
                'HMAC_SHA_224',
                'HMAC_SHA_256',
                'HMAC_SHA_384',
                'HMAC_SHA_512',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacCredentialsPayload' => [
            'kind' => 'object',
            'properties' => [
                'algorithm' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacAlgorithm',
                ],
                'secretKey' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'required' => [
                'algorithm',
                'secretKey',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OauthCredentialsPayload' => [
            'kind' => 'object',
            'properties' => [
                'clientId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'clientSecret' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'grantType' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'headers' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'password' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'refreshToken' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'resource' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'scope' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'tokenUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'username' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'required' => [
                'grantType',
                'tokenUrl',
            ],
        ],
    ];
}
