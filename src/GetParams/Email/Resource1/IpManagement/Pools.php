<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Email\Resource1\IpManagement;

final class Pools extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'name' => 'name',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
}
