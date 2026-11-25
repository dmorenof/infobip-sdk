<?php

declare(strict_types=1);

namespace InfobipSDK\PutParams\Email\Resource1\Bulks;

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

    protected const array VALIDATION = [
        'bulkId' => [
            'minLength' => 1,
        ],
    ];

    public string $bulkId {
        set {
            $this->assigning('bulkId', $value);
            $this->bulkId = $value;
        }
    }
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkUpdateStatusRequest $body;
}
