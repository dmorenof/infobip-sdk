<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Preview extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/flows/{flowId}/preview [operationId: get-whatsapp-flow-preview] */
    /**
     * Get WhatsApp Flow's preview
     *
     * Get flow's preview URL. Link does not require login and will expire in 30 days.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Preview $identifier): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowPreview
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Preview::class)->get($identifier);
    }

}
