<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Rcs\Resource1\Senders\BySender;

final class Templates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'status' => 'status',
    ],
    'header' => [],
];

    public ?\InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiStatus $status;
}
