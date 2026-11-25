<?php

declare(strict_types=1);

namespace InfobipSDK\PutParams\People\Resource2\Persons;

final class ContactInformation extends \Dmorenof\SdkRuntime\DTO
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

    public const bool OPERATION_BODY = true;

    public ?string $identifier;
    public ?string $sender;
    public ?\InfobipSDK\Enums\N67ea2a2f468d202db25df7b2d86e54c3628a74b47c8fd9cf8429d0e9a038dd27\PersonUniqueFieldType $type;
    public ?\InfobipSDK\Requests\AllOfSetPersonContactInformationBody\InformationBodyRequest $body;
}
