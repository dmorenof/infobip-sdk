<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey;

final class Voice extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /numbers/2/numbers/{numberKey}/voice [operationId: delete-voice-setup-on-number] */
    /**
     * Delete voice setup on number
     *
     * This method removes voice setup from a number. Use the `channel` parameter to remove the setup on a specific channel.
     */
    public static function delete(string $numberKey, ?\InfobipSDK\DeleteParams\Numbers\Resource2\Numbers\ByNumberKey\Voice $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice::class)->delete($numberKey, $params);
    }

    /** GET /numbers/2/numbers/{numberKey}/voice [operationId: get-voice-setup-on-number] */
    /**
     * Get voice setup on number
     *
     * This method fetches the voice setup on a number. Use the `channel` parameter to fetch the setup for a specific channel.
     */
    public static function get(string $numberKey, ?\InfobipSDK\GetParams\Numbers\Resource2\Numbers\ByNumberKey\Voice $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceSetup
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice::class)->get($numberKey, $params);
    }

    /** POST /numbers/2/numbers/{numberKey}/voice [operationId: create-voice-setup-on-number] */
    /**
     * Create voice setup on number
     *
     * This method will create a new voice setup on a number. There can be only one voice action set per channel. The available action types depend on `channel`. Check the schema and examples for more details.
     */
    public static function post(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ChannelVoiceSetup $payload): ?\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceSetup
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice::class)->post($numberKey, $payload);
    }

    /** PUT /numbers/2/numbers/{numberKey}/voice [operationId: update-voice-setup-on-number] */
    /**
     * Update voice setup on number
     *
     * This method updates voice setup previously created on a number. The available action types depend on `channel`. Check the schema and examples for more details.
     */
    public static function put(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ChannelVoiceSetup $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceSetup
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice::class)->put($numberKey, $payload);
    }

}
