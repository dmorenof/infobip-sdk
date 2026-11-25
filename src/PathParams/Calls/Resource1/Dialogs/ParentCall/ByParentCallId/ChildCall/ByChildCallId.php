<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Calls\Resource1\Dialogs\ParentCall\ByParentCallId\ChildCall;

final class ByChildCallId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'childCallId',
        'parentCallId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'childCallId' => 'childCallId',
            'parentCallId' => 'parentCallId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $childCallId;
    public string $parentCallId;
}
