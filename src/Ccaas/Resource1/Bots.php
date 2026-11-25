<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Bots extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/bots [operationId: get-bots] */
    /**
     * Get Bots
     *
     * Use this method to get bots with pagination. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#connect-external-bots-self-service-automation" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Bots $params = null): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\BotResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Bots::class)->get($params);
    }

    /** POST /ccaas/1/bots [operationId: setup-bot] */
    /**
     * Create bot
     *
     * Use this method to create a bot. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#connect-external-bots-self-service-automation" target="_blank">More info</a>
     */
    public static function post(\InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\BotApiModel $payload): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Bot
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Bots::class)->post($payload);
    }

    /** DELETE /ccaas/1/bots/{botId} [operationId: delete-bot] */
    /**
     * Delete bot
     *
     * Use this method to delete a bot.
     * All open conversations assigned to a bot will be rerouted. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#connect-external-bots-self-service-automation" target="_blank">More info</a>
     */
    public static function deleteByBotId(string $botId): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Bots::class)->deleteByBotId($botId);
    }

    /** GET /ccaas/1/bots/{botId} [operationId: get-bot] */
    /**
     * Get bot
     *
     * Use this method to get a bot. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#connect-external-bots-self-service-automation" target="_blank">More info</a>
     */
    public static function getByBotId(string $botId): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Bot
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Bots::class)->getByBotId($botId);
    }

    /** PUT /ccaas/1/bots/{botId} [operationId: update-bot] */
    /**
     * Update bot
     *
     * Use this method to update a bot. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#connect-external-bots-self-service-automation" target="_blank">More info</a>
     */
    public static function putByBotId(string $botId, \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\BotApiModel $payload): \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Bot
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Bots::class)->putByBotId($botId, $payload);
    }
}
