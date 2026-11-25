<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Webrtc\Resource1;

final class UserActivity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identity',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'endTime' => 'endTime',
        'identity' => 'identity',
        'page' => 'page',
        'sessionId' => 'sessionId',
        'size' => 'size',
        'startTime' => 'startTime',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 0,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    public ?string $endTime;
    public string $identity;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $sessionId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $startTime;
}
