<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Voice\Resource2;

final class WaitingStrategies extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'queueId' => 'queueId',
        'sortBy' => 'sortBy',
        'sortDirection' => 'sortDirection',
    ],
    'header' => [],
];

    public ?int $pageNumber;
    public ?int $pageSize;
    public ?string $queueId;
    public ?string $sortBy;
    public ?string $sortDirection;
}
