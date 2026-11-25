<?php

declare(strict_types=1);

namespace InfobipSDK\PutParams\Sms\Resource1;

final class Bulks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bulkId',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public string $bulkId;
    public \InfobipSDK\DTOs\N2e05f28ea1ad0c8ab6683b6adca8c2dc53bf0d4883946379aef59ba8417e5029\BulkRequest $body;
}
