<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors\Camara\NumberVerification\V2\Dcql\DevicePhoneNumber;

final class DevicePhoneNumberStatus403Response extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraPermissionDeniedErrorResponse::class, \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\PlatformErrorResponse::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.CamaraPermissionDeniedErrorResponse',
        ],
        [
            'kind' => 'reference',
            'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.PlatformErrorResponse',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.CamaraPermissionDeniedErrorResponse' => [
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
        'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.PlatformErrorResponse' => [
            'kind' => 'object',
            'properties' => [
                'requestError' => [
                    'kind' => 'reference',
                    'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.RequestError',
                ],
            ],
        ],
        'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.RequestError' => [
            'kind' => 'object',
            'properties' => [
                'serviceException' => [
                    'kind' => 'reference',
                    'ref' => 'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.ServiceException',
                ],
            ],
        ],
        'c4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae.ServiceException' => [
            'kind' => 'object',
            'properties' => [
                'messageId' => [
                    'kind' => 'string',
                ],
                'text' => [
                    'kind' => 'string',
                ],
            ],
        ],
    ];
}
