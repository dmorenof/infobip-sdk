<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1\Certificates\Test;

final class Webhook extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /subscriptions/1/certificates/test/webhook [operationId: test-connection-to-webhook] */
    /**
     * Test connection to a webhook
     *
     * Performs connectivity check to provided webhook with the given certificate. Note, it does not send a notification event.
     */
    public static function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateConnectionTestRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateConnectionTestResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates\Test\Webhook::class)->post($payload);
    }
}
