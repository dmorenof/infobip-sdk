<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows;

final class Generate extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/1/senders/{sender}/flows/generate',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\\GenerateFlowResponseApiData',
        'validation' => [
            'sender' => [
                'minLength' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\\GenerateFlowRequestApiData',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Generate WhatsApp Flow
     *
     * Use this endpoint to automatically generate a WhatsApp Flow definition  using AI, based on a natural language prompt. Provide a descriptive prompt (e.g., "Create a Static WhatsApp Flow to collect details like Name, Surname and email for our global event next week."). The AI will generate a flow configuration designed to match your intent. If you include a responseId from an earlier request, the prompt will be used to modify or refine the flow that was previously generated, so you can adjust and improve it step by step.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function post(string $sender, \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GenerateFlowRequestApiData $payload): \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GenerateFlowResponseApiData
    {
        /** @var \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GenerateFlowResponseApiData $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['sender' => $sender]);
        return $result;
    }

}
