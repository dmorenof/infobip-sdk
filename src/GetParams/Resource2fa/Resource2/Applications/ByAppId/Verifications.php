<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Resource2fa\Resource2\Applications\ByAppId;

final class Verifications extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'msisdn',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'msisdn' => 'msisdn',
            'sent' => 'sent',
            'verified' => 'verified',
        ],
        'header' => [],
    ];

    public string $msisdn;
    public ?bool $sent;
    public ?bool $verified;
}
