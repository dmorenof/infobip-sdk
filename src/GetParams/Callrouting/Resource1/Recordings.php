<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Callrouting\Resource1;

final class Recordings extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'correlationId' => 'correlationId',
            'endpointType' => 'endpointType',
            'location' => 'location',
            'page' => 'page',
            'phoneNumber' => 'phoneNumber',
            'routeId' => 'routeId',
            'routeName' => 'routeName',
            'sipTrunkId' => 'sipTrunkId',
            'sipUsername' => 'sipUsername',
            'size' => 'size',
            'sortBy' => 'sortBy',
            'sortDirection' => 'sortDirection',
            'startTimeAfter' => 'startTimeAfter',
            'startTimeBefore' => 'startTimeBefore',
            'webrtcIdentity' => 'webrtcIdentity',
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

    public ?string $correlationId;
    public ?string $endpointType;
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingLocation $location;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $phoneNumber;
    public ?string $routeId;
    public ?string $routeName;
    public ?string $sipTrunkId;
    public ?string $sipUsername;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingSortColumn $sortBy;
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SortDirection $sortDirection;
    public ?string $startTimeAfter;
    public ?string $startTimeBefore;
    public ?string $webrtcIdentity;
}
