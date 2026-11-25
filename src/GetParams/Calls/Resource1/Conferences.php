<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Calls\Resource1;

final class Conferences extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'callId' => 'callId',
        'callsConfigurationId' => 'callsConfigurationId',
        'name' => 'name',
        'page' => 'page',
        'size' => 'size',
        'startTimeAfter' => 'startTimeAfter',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    public ?string $applicationId;
    public ?string $callId;
    public ?string $callsConfigurationId;
    public ?string $name;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $startTimeAfter;
}
