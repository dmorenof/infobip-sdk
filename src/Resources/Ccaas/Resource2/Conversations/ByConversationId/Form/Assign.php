<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Resource2\Conversations\ByConversationId\Form;

final class Assign extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/ccaas/2/conversations/{conversationId}/form/assign',
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
            400 => '\\InfobipSDK\\DTOs\\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\\StatusCodeResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\\StatusCodeResponse',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\\StatusCodeResponse',
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
                'type' => '\\InfobipSDK\\DTOs\\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\\StatusCodeResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\\StatusCodeResponse',
    ];

    /**
     * Assign form to conversation
     *
     * Use this method to assign form to a conversation.
     */
    public function post(string $conversationId, \InfobipSDK\PostParams\Ccaas\Resource2\Conversations\ByConversationId\Form\Assign $params): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        /** @var \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['conversationId' => $conversationId], parameters: $params);
        return $result;
    }

}
