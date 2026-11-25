<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender;

final class Flows extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/flows [operationId: get-whatsapp-flows] */
    /**
     * Get WhatsApp Flows
     *
     * Get all the flows for a given sender.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GetSenderFlowsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows::class)->get($sender);
    }

    /** POST /whatsapp/1/senders/{sender}/flows [operationId: create-whatsapp-flow] */
    /**
     * Create WhatsApp Flow
     *
     * Create a WhatsApp flow. If successful, flow will be created in DRAFT status with default flow.json. Flow.json contains structure of the flow and other fields given in request can be updated until publication.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\CreateFlowRequest $payload): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows::class)->post($sender, $payload);
    }

    /** DELETE /whatsapp/1/senders/{sender}/flows/{flowId} [operationId: delete-whatsapp-flow] */
    /**
     * Delete WhatsApp Flow
     *
     * Delete a WhatsApp flow. Only flows in DRAFT status can be deleted.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function deleteByFlowId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows::class)->deleteByFlowId($identifier);
    }

    /** PATCH /whatsapp/1/senders/{sender}/flows/{flowId} [operationId: update-whatsapp-flow] */
    /**
     * Update WhatsApp Flow
     *
     * Update a WhatsApp flow. Only flows in DRAFT status can be modified.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function patchByFlowId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId $identifier, \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\UpdateFlowRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows::class)->patchByFlowId($identifier, $payload);
    }
}
