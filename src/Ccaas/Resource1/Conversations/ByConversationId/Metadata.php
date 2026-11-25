<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\Conversations\ByConversationId;

final class Metadata extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /ccaas/1/conversations/{conversationId}/metadata [operationId: delete-metadata] */
    /**
     * Delete metadata
     *
     * Use this method to delete conversation metadata. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function delete(string $conversationId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Metadata::class)->delete($conversationId);
    }

    /** GET /ccaas/1/conversations/{conversationId}/metadata [operationId: get-metadata] */
    /**
     * Get metadata
     *
     * Use this method to retrieve conversation metadata. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function get(string $conversationId): string
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Metadata::class)->get($conversationId);
    }

    /** PATCH /ccaas/1/conversations/{conversationId}/metadata [operationId: patch-metadata] */
    /**
     * Patch metadata
     *
     * Use this method for metadata partial updating. If there is no present metadata, one will be created from request. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function patch(string $conversationId, \InfobipSDK\Requests\Ccaas\Resource1\Conversations\ByConversationId\Metadata\Patch $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Metadata::class)->patch($conversationId, $payload);
    }

    /** PUT /ccaas/1/conversations/{conversationId}/metadata [operationId: create-metadata] */
    /**
     * Put metadata
     *
     * Use this method to create or update conversation metadata. Method overwrites old metadata. <a href="https://www.infobip.com/docs/conversations-api" target="_blank">More info</a>
     */
    public static function put(string $conversationId, \InfobipSDK\Requests\Ccaas\Resource1\Conversations\ByConversationId\Metadata\Put $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Conversations\ByConversationId\Metadata::class)->put($conversationId, $payload);
    }
}
