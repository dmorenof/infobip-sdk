<?php

declare(strict_types=1);

namespace InfobipSDK\PutParams\Tts\Resource3\Bulks;

final class Status extends \Dmorenof\SdkRuntime\DTO
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
    public \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusRequest $body;
}
