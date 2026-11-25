<?php

declare(strict_types=1);

namespace InfobipSDK\Provisioning\Resource2;

final class SendingStrategies extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /provisioning/2/sending-strategies [operationId: get-sending-strategies-v2] */
    /**
     * Get sending strategies
     *
     * Get sending strategies.
     */
    public static function get(?\InfobipSDK\GetParams\Provisioning\Resource2\SendingStrategies $params = null): \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\PageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource2\SendingStrategies::class)->get($params);
    }

    /** POST /provisioning/2/sending-strategies [operationId: create-sending-strategy-v2] */
    /**
     * Create sending strategy
     *
     * Create sending strategy.
     */
    public static function post(\InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SssRequestV2 $payload): \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SendingStrategyId
    {
        return self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource2\SendingStrategies::class)->post($payload);
    }

    /** DELETE /provisioning/2/sending-strategies/{sendingStrategyId} [operationId: delete-sending-strategy-by-sending-strategy-id-v2] */
    /**
     * Delete sending strategy by sending strategy id
     *
     * Delete sending strategy by sending strategy id.
     */
    public static function deleteBySendingStrategyId(string $sendingStrategyId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Provisioning\Resource2\SendingStrategies::class)->deleteBySendingStrategyId($sendingStrategyId);
    }

}
