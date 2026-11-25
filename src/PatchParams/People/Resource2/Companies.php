<?php

declare(strict_types=1);

namespace InfobipSDK\PatchParams\People\Resource2;

final class Companies extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'domain' => 'domain',
            'externalId' => 'externalId',
            'id' => 'id',
            'name' => 'name',
            'replaceDomains' => 'replaceDomains',
            'replaceTags' => 'replaceTags',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?string $domain;
    public ?string $externalId;
    public ?int $id;
    public ?string $name;
    public ?bool $replaceDomains;
    public ?bool $replaceTags;
    public ?\InfobipSDK\Requests\CompanyBodyRequest $body;
}
