<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

final class AnyOfBadRequestResponse extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\CustomBadRequestResponse::class, \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\ExceptionResponse::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0.CustomBadRequestResponse',
        ],
        [
            'kind' => 'reference',
            'ref' => '900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0.ExceptionResponse',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0.CustomBadRequestResponse' => [
            'kind' => 'object',
            'properties' => [
                'detail' => [
                    'kind' => 'string',
                ],
                'instance' => [
                    'kind' => 'string',
                ],
                'status' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'title' => [
                    'kind' => 'string',
                ],
                'type' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'detail',
                'instance',
                'status',
                'title',
                'type',
            ],
        ],
        '900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0.ExceptionResponse' => [
            'kind' => 'object',
            'properties' => [
                'errorCode' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'errorMessage' => [
                    'kind' => 'string',
                ],
            ],
        ],
    ];
}
