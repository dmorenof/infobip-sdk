<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\People\Resource2\Companies;

final class Persons extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'domain' => 'domain',
            'externalId' => 'externalId',
            'id' => 'id',
            'name' => 'name',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?string $domain;
    public ?string $externalId;
    public ?int $id;
    public ?string $name;
    public ?\InfobipSDK\Requests\AllOfBatchRemovePersonsFromCompanyBody\CompanyBodyRequest $body;
}
