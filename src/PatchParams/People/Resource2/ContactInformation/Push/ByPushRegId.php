<?php

declare(strict_types=1);

namespace InfobipSDK\PatchParams\People\Resource2\ContactInformation\Push;

final class ByPushRegId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'AppCode',
        'body',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'AppCode' => 'AppCode',
        ],
    ];

    public const bool OPERATION_BODY = true;

    public string $AppCode;
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance $body;
}
