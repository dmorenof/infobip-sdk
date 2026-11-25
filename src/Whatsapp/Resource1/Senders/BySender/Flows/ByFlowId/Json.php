<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Json extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/flows/{flowId}/json [operationId: get-whatsapp-flow-json] */
    /**
     * Get WhatsApp Flow JSON
     *
     * Get the Flow JSON attached to a specified flow.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Json $identifier): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GetFlowJsonResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Json::class)->get($identifier);
    }

    /** PUT /whatsapp/1/senders/{sender}/flows/{flowId}/json [operationId: add-whatsapp-flow-json] */
    /**
     * Add WhatsApp Flow JSON
     *
     * Add WhatsApp Flow JSON. File created from provided JSON content is sent and validated, errors found are provided in response. Regardless of whether any validation errors are returned, the Flow JSON is loaded on the Meta side and the request is considered successful. The maximum size of created file is 10MB. More information about JSON structure can be found under Meta documentation: https://developers.facebook.com/docs/whatsapp/flows/reference/flowjson.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function put(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Json $identifier, \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\AddFlowJson $payload): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\AddFlowJsonResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Json::class)->put($identifier, $payload);
    }
}
