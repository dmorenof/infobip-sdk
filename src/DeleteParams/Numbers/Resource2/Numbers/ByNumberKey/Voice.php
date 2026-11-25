<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Numbers\Resource2\Numbers\ByNumberKey;

final class Voice extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'channel' => 'channel',
        ],
        'header' => [],
    ];

    public ?\InfobipSDK\Enums\Numbers\Resource2\Numbers\ByNumberKey\Voice\Delete\Query\QueryChannelEnum $channel;
}
