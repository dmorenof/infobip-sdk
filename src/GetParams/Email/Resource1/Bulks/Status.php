<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Email\Resource1\Bulks;

final class Status extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'bulkId' => 'bulkId',
        ],
        'header' => [],
    ];

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
}
