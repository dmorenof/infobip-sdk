<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber;

final class Refresh extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'senderName',
        'testNumber',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'senderName' => 'senderName',
            'testNumber' => 'testNumber',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $senderName;
    public string $testNumber;
}
