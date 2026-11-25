<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId;

final class Events extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'definitionId',
        'personId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'definitionId' => 'definitionId',
            'personId' => 'personId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $definitionId;
    public string $personId;
}
