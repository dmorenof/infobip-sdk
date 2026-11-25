<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\KakaoBrandMessages\Resource1;

final class Templates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'senderGroupKey' => 'senderGroupKey',
        'senderKey' => 'senderKey',
        'since' => 'since',
        'size' => 'size',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'format' => 'int32',
    ],
    'senderGroupKey' => [
        'minLength' => 0,
        'maxLength' => 40,
    ],
    'senderKey' => [
        'minLength' => 0,
        'maxLength' => 40,
    ],
    'size' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
];

    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $senderGroupKey {
        set {
            $this->assigning('senderGroupKey', $value);
            $this->senderGroupKey = $value;
        }
    }
    public ?string $senderKey {
        set {
            $this->assigning('senderKey', $value);
            $this->senderKey = $value;
        }
    }
    public ?string $since;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
