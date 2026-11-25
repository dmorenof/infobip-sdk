<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Webrtc\Resource1\Recordings;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'location' => 'location',
        ],
        'header' => [],
    ];

    public ?\InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\RecordingLocation $location;
}
