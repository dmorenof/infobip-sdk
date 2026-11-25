<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer;

final class ExternalNumber extends \InfobipSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/ccaas/voice/2/conversation/{conversationId}/transfer/external-number',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N30bce31dfbdcb9fa9268f4e4ce1f7ccf05ef063a92c880be9d1b9efcfc2ac71a\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            409 => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
            412 => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N30bce31dfbdcb9fa9268f4e4ce1f7ccf05ef063a92c880be9d1b9efcfc2ac71a\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
                'schemaNullable' => false,
            ],
            412 => [
                'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\StatusResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\\TransferToExternalRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Transfer call to external number
     *
     * Use this method to transfer the call to an external phone number. Depending on the Transfer to External Number configuration, the Agent can transfer the call to any valid phone number or only to the numbers in the People with the external_number tag. <a href="https://www.infobip.com/docs/conversations/calls#transfer-to-external-number-agent-guide" target="_blank">More info</a>.
     */
    public function patch(string $conversationId, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\TransferToExternalRequest $payload): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse
    {
        /** @var \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\StatusResponse $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload, path: ['conversationId' => $conversationId]);
        return $result;
    }

}
