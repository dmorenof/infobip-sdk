<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Voice\Ivr\Resource1;

final class Files extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'messageId' => 'messageId',
        'number' => 'number',
        'page' => 'page',
        'pageSize' => 'pageSize',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'format' => 'int32',
    ],
    'pageSize' => [
        'format' => 'int32',
    ],
];

    public ?string $messageId;
    public ?string $number;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
}
