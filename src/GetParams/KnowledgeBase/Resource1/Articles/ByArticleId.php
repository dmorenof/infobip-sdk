<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\KnowledgeBase\Resource1\Articles;

final class ByArticleId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'recordView' => 'recordView',
        ],
        'header' => [],
    ];

    public ?bool $recordView;
}
