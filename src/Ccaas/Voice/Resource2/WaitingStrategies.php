<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2;

final class WaitingStrategies extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/waiting-strategies [operationId: get-conversations-waiting-strategies] */
    /**
     * Get all waiting strategies
     *
     * Use this method to retrieve all waiting strategies. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#waiting-strategy-digital-channels" target="_blank">More info</a>.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Voice\Resource2\WaitingStrategies $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\WaitingStrategyApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\WaitingStrategies::class)->get($params);
    }

    /** POST /ccaas/voice/2/waiting-strategies [operationId: create-conversations-waiting-strategy] */
    /**
     * Create waiting strategy
     *
     * Use this method to add a new waiting strategy. To upload an audio file and get value for fileDescriptor field, use <a href="https://www.infobip.com/docs/api#customer-engagement/anonymize/upload-audio-files" target="_blank">Upload audio files endpoint</a>. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#waiting-strategy-digital-channels" target="_blank">More info</a>.
     */
    public static function post(\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\WaitingStrategyApiRequest $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\WaitingStrategyApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\WaitingStrategies::class)->post($payload);
    }

    /** DELETE /ccaas/voice/2/waiting-strategies/{id} [operationId: delete-conversations-waiting-strategy] */
    /**
     * Delete waiting strategy
     *
     * Use this method to delete a waiting strategy by its Id. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#waiting-strategy-digital-channels" target="_blank">More info</a>.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\WaitingStrategies::class)->deleteById($id);
    }

    /** GET /ccaas/voice/2/waiting-strategies/{id} [operationId: get-conversations-waiting-strategy] */
    /**
     * Get waiting strategy
     *
     * Use this method to retrieve a waiting strategy by its Id. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#waiting-strategy-digital-channels" target="_blank">More info</a>.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\WaitingStrategyApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\WaitingStrategies::class)->getById($id);
    }

    /** PUT /ccaas/voice/2/waiting-strategies/{id} [operationId: update-conversations-waiting-strategy] */
    /**
     * Update waiting strategy
     *
     * Use this method to update a waiting strategy. To upload an audio file and get value for fileDescriptor field, use <a href="https://www.infobip.com/docs/api#customer-engagement/anonymize/upload-audio-files" target="_blank">Upload audio files endpoint</a>. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#waiting-strategy-digital-channels" target="_blank">More info</a>.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\WaitingStrategyApiRequest $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\WaitingStrategyApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\WaitingStrategies::class)->putById($id, $payload);
    }
}
