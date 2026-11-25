<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Resource2fa\Resource2;

final class Pin extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'ncNeeded' => 'ncNeeded',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public ?bool $ncNeeded;
    public ?\InfobipSDK\Requests\SmsBodyRequest $body;
}
