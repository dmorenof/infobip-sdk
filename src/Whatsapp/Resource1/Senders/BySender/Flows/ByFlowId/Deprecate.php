<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Deprecate extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/senders/{sender}/flows/{flowId}/deprecate [operationId: deprecate-whatsapp-flow] */
    /**
     * Deprecate WhatsApp Flow
     *
     * Deprecate a WhatsApp flow. If successful, flow will change its status to DEPRECATED. From now on flow cannot be sent anymore.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Deprecate $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Deprecate::class)->post($identifier);
    }

}
