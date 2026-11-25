<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Ccaas\Resource2\Conversations\ByConversationId\Form;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conversationId',
    'id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'conversationId' => 'conversationId',
        'id' => 'id',
    ],
    'query' => [],
    'header' => [],
];

    public string $conversationId;
    public string $id;
}
