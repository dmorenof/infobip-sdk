<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\People\Resource2;

final class Companies extends \Dmorenof\SdkRuntime\DTO
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

    public ?string $domain;
    public ?string $externalId;
    public ?int $id;
    public ?string $name;
}
