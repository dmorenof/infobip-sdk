<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Publish extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/senders/{sender}/flows/{flowId}/publish [operationId: publish-whatsapp-flow] */
    /**
     * Publish WhatsApp Flow
     *
     * Publish a WhatsApp flow. If successful, the flow will change its status to PUBLISHED. From now on the flow cannot be modified.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Publish $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Publish::class)->post($identifier);
    }

}
