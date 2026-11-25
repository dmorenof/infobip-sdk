<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class Routing extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'enabled' => 'enabled',
        'ruleIds' => 'ruleIds',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'ruleIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?bool $enabled;
    /** @var list<string>|null */
    public ?array $ruleIds;
}
