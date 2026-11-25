<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Camara\NumberVerification\V2\Dcql\Verify\Post;

final class DcqlVerifyResponse extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DcqlResponseDto::class, \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DcqlNotFoundErrorResponse::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.DcqlResponseDto',
    ],
    [
        'kind' => 'reference',
        'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.DcqlNotFoundErrorResponse',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.CamaraNotFoundErrorResponse' => [
        'kind' => 'object',
        'properties' => [
            'code' => [
                'kind' => 'string',
            ],
            'message' => [
                'kind' => 'string',
            ],
            'status' => [
                'kind' => 'integer',
                'rules' => [
                    'format' => 'int32',
                ],
            ],
        ],
    ],
    'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.Claim' => [
        'kind' => 'object',
        'properties' => [
            'path' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'string',
                ],
            ],
            'values' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.DcqlCredentialPerCarrierDtoResponse' => [
        'kind' => 'object',
        'properties' => [
            'claims' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'reference',
                    'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.Claim',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
            'id' => [
                'kind' => 'string',
            ],
            'meta' => [
                'kind' => 'reference',
                'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.Meta',
            ],
        ],
    ],
    'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.DcqlNotFoundErrorResponse' => [
        'kind' => 'object',
        'additional' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.CamaraNotFoundErrorResponse',
                ],
            ],
        ],
    ],
    'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.DcqlResponseDto' => [
        'kind' => 'object',
        'additional' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.DcqlCredentialPerCarrierDtoResponse',
                ],
            ],
        ],
    ],
    'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.Meta' => [
        'kind' => 'object',
        'properties' => [
            'credential_authorization_jwt' => [
                'kind' => 'string',
            ],
            'vct_values' => [
                'kind' => 'array',
                'items' => [
                    'kind' => 'string',
                ],
            ],
        ],
    ],
];
}
