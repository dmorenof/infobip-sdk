<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Tags extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/tags [operationId: get-tags] */
    /**
     * Get tags
     *
     * Use this method to get a list of tags with pagination and filtering options. Using a filter is optional. The result can be filtered only by conversation Id so the result list will be tagged for a specific conversation. <a href="https://www.infobip.com/docs/conversations-api/tags" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Tags $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TagsApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Tags::class)->get($params);
    }

    /** POST /ccaas/1/tags [operationId: create-tag] */
    /**
     * Create tag
     *
     * Use this method to create a new tag. Tags can be assigned to the conversations to categorize them into topics or customer intents. Tags can be created ad hoc over the create tag method or automatically within the journey automation flow when a conversation is transferred to Agents. <a href="https://www.infobip.com/docs/conversations-api/tags" target="_blank">More info</a>
     */
    public static function post(\InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateTagApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateTagApiRequest
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Tags::class)->post($payload);
    }

    /** DELETE /ccaas/1/tags/{tagName} [operationId: delete-tags] */
    /**
     * Delete tag
     *
     * Use this method to delete the tag.
     * Deleting tag will remove the tag from all associated conversations. This operation cannot be reverted! <a href="https://www.infobip.com/docs/conversations-api/tags" target="_blank">More info</a>
     */
    public static function deleteByTagName(string $tagName): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Tags::class)->deleteByTagName($tagName);
    }
}
