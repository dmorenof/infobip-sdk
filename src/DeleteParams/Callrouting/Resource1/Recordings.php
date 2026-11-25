<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Callrouting\Resource1;

final class Recordings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'correlationId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'correlationId' => 'correlationId',
            'location' => 'location',
        ],
        'header' => [],
    ];

    public string $correlationId;
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingLocation $location;
}
