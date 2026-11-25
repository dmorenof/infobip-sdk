<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Calls\Resource1\Recordings\Files;

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
    public ?\InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingLocation $location;
}
