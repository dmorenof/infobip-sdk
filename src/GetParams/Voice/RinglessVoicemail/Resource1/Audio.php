<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Voice\RinglessVoicemail\Resource1;

final class Audio extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'size' => 'size',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 100,
    ],
];

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
}
