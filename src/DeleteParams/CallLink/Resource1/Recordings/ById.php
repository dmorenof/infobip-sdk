<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\CallLink\Resource1\Recordings;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'location' => 'location',
    ],
    'header' => [],
];

    public ?\InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingLocation $location;
}
