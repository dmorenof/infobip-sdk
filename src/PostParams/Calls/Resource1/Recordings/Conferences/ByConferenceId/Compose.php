<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Calls\Resource1\Recordings\Conferences\ByConferenceId;

final class Compose extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'location' => 'location',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingLocation $location;
    public ?\InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\OnDemandComposition $body;
}
