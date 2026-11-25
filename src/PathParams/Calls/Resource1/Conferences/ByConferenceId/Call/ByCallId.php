<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Calls\Resource1\Conferences\ByConferenceId\Call;

final class ByCallId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'callId',
        'conferenceId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'callId' => 'callId',
            'conferenceId' => 'conferenceId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $callId;
    public string $conferenceId;
}
