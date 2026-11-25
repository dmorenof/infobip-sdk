<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\MessagesApi\Resource1;

final class Inbound extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'applicationId' => 'applicationId',
            'campaignReferenceId' => 'campaignReferenceId',
            'channel' => 'channel',
            'entityId' => 'entityId',
            'limit' => 'limit',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'format' => 'int32',
        ],
    ];

    public ?string $applicationId;
    public ?string $campaignReferenceId;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundMoGetEndpointChannel $channel;
    public ?string $entityId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
}
