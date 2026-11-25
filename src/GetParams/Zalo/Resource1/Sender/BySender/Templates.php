<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Zalo\Resource1\Sender\BySender;

final class Templates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'size' => 'size',
        'status' => 'status',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
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
    public ?\InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateStatus $status;
}
