<?php

declare(strict_types=1);

namespace InfobipSDK\Omni\Resource1;

final class Advanced extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /omni/1/advanced [operationId: send-omni-failover-message] */
    /**
     * Send OMNI failover message
     *
     * Send one or multiple messages over WhatsApp, Viber, Voice, VKontakte, Line, SMS or Push, with automatic failover to another channel according to the specific scenario.
     */
    public static function post(\InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\OmniAdvancedRequest $payload): \InfobipSDK\DTOs\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8\OmniResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Advanced::class)->post($payload);
    }

}
