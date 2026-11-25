<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\KnowledgeBase\Resource1\Articles\ByArticleId\Comments;

final class ByCommentId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'articleId',
        'commentId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'articleId' => 'articleId',
            'commentId' => 'commentId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $articleId;
    public string $commentId;
}
