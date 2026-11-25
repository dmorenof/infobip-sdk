<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Notes extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/conversations/{conversationId}/notes [operationId: get-notes] */
    /**
     * Get notes
     *
     * Use this method to get a list of notes from conversation with pagination. <a href="https://www.infobip.com/docs/conversations-api/notes" target="_blank">More info</a>
     */
    public static function get(string $conversationId, ?\InfobipSDK\GetParams\Ccaas\Resource1\Conversations\ByConversationId\Notes $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Notes::class)->get($conversationId, $params);
    }

    /** POST /ccaas/1/conversations/{conversationId}/notes [operationId: create-note] */
    /**
     * Create note
     *
     * Use this method to create a new note. Use notes to notify your team on important matters regarding a conversation with a customer. <a href="https://www.infobip.com/docs/conversations-api/notes" target="_blank">More info</a>
     */
    public static function post(string $conversationId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateNoteApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Notes::class)->post($conversationId, $payload);
    }

    /** GET /ccaas/1/conversations/{conversationId}/notes/{noteId} [operationId: get-note] */
    /**
     * Get note
     *
     * Use this method to retrieve a note. <a href="https://www.infobip.com/docs/conversations-api/notes" target="_blank">More info</a>
     */
    public static function getByNoteId(\InfobipSDK\PathParams\Ccaas\Resource1\Conversations\ByConversationId\Notes\ByNoteId $identifier): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Notes::class)->getByNoteId($identifier);
    }

}
