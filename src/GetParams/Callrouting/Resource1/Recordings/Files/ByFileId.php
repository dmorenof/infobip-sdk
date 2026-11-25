<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Callrouting\Resource1\Recordings\Files;

final class ByFileId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'location' => 'location',
    ],
    'header' => [
        'Range' => 'Range',
    ],
];

    public ?string $Range;
    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingLocation $location;
}
