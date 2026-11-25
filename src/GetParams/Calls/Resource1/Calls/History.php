<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Calls\Resource1\Calls;

final class History extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'applicationId' => 'applicationId',
            'bulkId' => 'bulkId',
            'callsConfigurationId' => 'callsConfigurationId',
            'conferenceId' => 'conferenceId',
            'dialogId' => 'dialogId',
            'direction' => 'direction',
            'from' => 'from',
            'page' => 'page',
            'size' => 'size',
            'startTimeAfter' => 'startTimeAfter',
            'status' => 'status',
            'to' => 'to',
            'type' => 'type',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 100,
            'format' => 'int32',
        ],
    ];

    public ?string $applicationId;
    public ?string $bulkId;
    public ?string $callsConfigurationId;
    public ?string $conferenceId;
    public ?string $dialogId;
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection $direction;
    public ?string $from;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $startTimeAfter;
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallState $status;
    public ?string $to;
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpointType $type;
}
