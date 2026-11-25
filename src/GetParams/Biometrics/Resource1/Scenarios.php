<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Biometrics\Resource1;

final class Scenarios extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationTypes' => 'applicationTypes',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'applicationTypes' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    /** @var list<string>|null */
    public ?array $applicationTypes;
}
