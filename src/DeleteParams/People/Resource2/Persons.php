<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\People\Resource2;

final class Persons extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'identifier' => 'identifier',
        'sender' => 'sender',
        'type' => 'type',
    ],
    'header' => [],
];

    public ?string $identifier;
    public ?string $sender;
    public ?\InfobipSDK\Enums\N67ea2a2f468d202db25df7b2d86e54c3628a74b47c8fd9cf8429d0e9a038dd27\PersonUniqueFieldType $type;
}
