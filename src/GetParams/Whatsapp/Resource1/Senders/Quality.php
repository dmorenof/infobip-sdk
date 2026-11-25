<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Whatsapp\Resource1\Senders;

final class Quality extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'senders',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'senders' => 'senders',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'senders' => [
        'minItems' => 1,
        'maxItems' => 100,
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    /** @var list<string> */
    public array $senders;
}
