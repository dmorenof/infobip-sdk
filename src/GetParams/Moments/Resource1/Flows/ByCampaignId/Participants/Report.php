<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Moments\Resource1\Flows\ByCampaignId\Participants;

final class Report extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'operationId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'applicationId' => 'applicationId',
            'entityId' => 'entityId',
            'operationId' => 'operationId',
        ],
        'header' => [],
    ];

    public ?string $applicationId;
    public ?string $entityId;
    public string $operationId;
}
