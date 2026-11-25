<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Ccaas\Resource1\Conversations\ByConversationId\Tags;

final class ByTagName extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conversationId',
    'tagName',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'conversationId' => 'conversationId',
        'tagName' => 'tagName',
    ],
    'query' => [],
    'header' => [],
];

    public string $conversationId;
    public string $tagName;
}
