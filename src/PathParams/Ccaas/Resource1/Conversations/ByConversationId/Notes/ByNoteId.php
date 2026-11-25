<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Ccaas\Resource1\Conversations\ByConversationId\Notes;

final class ByNoteId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conversationId',
    'noteId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'conversationId' => 'conversationId',
        'noteId' => 'noteId',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'noteId' => [
        'minLength' => 1,
    ],
];

    public string $conversationId;
    public string $noteId {
        set {
            $this->assigning('noteId', $value);
            $this->noteId = $value;
        }
    }
}
