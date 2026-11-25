<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Markuplanguage\Resource1;

final class Recordings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'markupRecordingId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'location' => 'location',
            'markupRecordingId' => 'markupRecordingId',
        ],
        'header' => [],
    ];

    public ?\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingLocation $location;
    public string $markupRecordingId;
}
