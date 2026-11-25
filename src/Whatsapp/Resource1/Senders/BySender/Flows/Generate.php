<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Flows;

final class Generate extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/senders/{sender}/flows/generate [operationId: generate-whatsapp-flow] */
    /**
     * Generate WhatsApp Flow
     *
     * Use this endpoint to automatically generate a WhatsApp Flow definition  using AI, based on a natural language prompt. Provide a descriptive prompt (e.g., "Create a Static WhatsApp Flow to collect details like Name, Surname and email for our global event next week."). The AI will generate a flow configuration designed to match your intent. If you include a responseId from an earlier request, the prompt will be used to modify or refine the flow that was previously generated, so you can adjust and improve it step by step.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GenerateFlowRequestApiData $payload): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GenerateFlowResponseApiData
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\Generate::class)->post($sender, $payload);
    }
}
