<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Webrtc\Resource1;

final class Recordings extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'callType' => 'callType',
        'identity' => 'identity',
        'location' => 'location',
        'page' => 'page',
        'phoneNumber' => 'phoneNumber',
        'roomId' => 'roomId',
        'roomName' => 'roomName',
        'size' => 'size',
        'sortBy' => 'sortBy',
        'sortDirection' => 'sortDirection',
        'startTimeAfter' => 'startTimeAfter',
        'startTimeBefore' => 'startTimeBefore',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 0,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    public ?\InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\CallType $callType;
    public ?string $identity;
    public ?\InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\RecordingLocation $location;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $phoneNumber;
    public ?string $roomId;
    public ?string $roomName;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?\InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\RecordingSortColumn $sortBy;
    public ?\InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\SortDirection $sortDirection;
    public ?string $startTimeAfter;
    public ?string $startTimeBefore;
}
