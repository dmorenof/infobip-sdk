<?php

declare(strict_types=1);

namespace InfobipSDK\LineOa\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /line-oa/1/messages [operationId: send-line-oa-message] */
    /**
     * Send a LINE Official Account message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/line
     */
    public static function post(\InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaRequest $payload): \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\LineOa\Resource1\Messages::class)->post($payload);
    }
}
