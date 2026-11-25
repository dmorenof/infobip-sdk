<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Voice\Resource2\Recording\Download;

final class ByRecordingId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'Range' => 'Range',
    ],
];

    public ?string $Range;
}
