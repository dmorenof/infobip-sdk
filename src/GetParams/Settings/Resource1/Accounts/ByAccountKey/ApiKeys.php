<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Settings\Resource1\Accounts\ByAccountKey;

final class ApiKeys extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'enabled' => 'enabled',
        'limit' => 'limit',
        'name' => 'name',
        'publicApiKey' => 'publicApiKey',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'format' => 'int32',
    ],
];

    public ?bool $enabled;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $name;
    public ?string $publicApiKey;
}
