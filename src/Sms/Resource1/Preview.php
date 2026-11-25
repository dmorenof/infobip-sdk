<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1;

final class Preview extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /sms/1/preview [operationId: preview-sms-message] */
    /**
     * Preview SMS message
     *
     * Avoid unpleasant surprises and check how different message configurations will affect your message text, number of characters and message parts.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function post(\InfobipSDK\DTOs\N01e84c3b4dd6fb6c49761ac60f0bbc50e5117905a6beb7547645113e59aaeb46\PreviewRequest $payload): \InfobipSDK\DTOs\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5\PreviewResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Preview::class)->post($payload);
    }
}
