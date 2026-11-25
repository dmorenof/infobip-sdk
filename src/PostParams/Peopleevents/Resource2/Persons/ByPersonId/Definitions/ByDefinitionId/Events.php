<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId;

final class Events extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifierType',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'createPerson' => 'createPerson',
            'identifierType' => 'identifierType',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?bool $createPerson;
    public \InfobipSDK\Enums\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\PersonUniqueFieldType $identifierType;
    public ?\InfobipSDK\DTOs\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\EventResourceRequest $body;
}
