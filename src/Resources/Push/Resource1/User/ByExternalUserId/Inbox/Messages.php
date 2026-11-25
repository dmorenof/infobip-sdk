<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource1\User\ByExternalUserId\Inbox;

final class Messages extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/push/1/user/{externalUserId}/inbox/messages',
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
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1a371cd8f3283b37bf4803906b01cdcf51f31ded659ebcfe44c8dbb3c4785a4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a371cd8f3283b37bf4803906b01cdcf51f31ded659ebcfe44c8dbb3c4785a4e\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1fab3d191d736425211a5879d4b2241fa0e80b8ab68239ab74531b9b6408a7a8\\DeletionAcceptedResponse',
        'querySerialization' => [
            'messageId' => 'multi',
        ],
    ];

    /**
     * Delete Push Inbox message for a specific user
     *
     * Deletes a single Push Inbox message from a specific user's inbox. Requires specifying either campaignId or bulkId.
     */
    public function delete(string $externalUserId, ?\InfobipSDK\DeleteParams\Push\Resource1\User\ByExternalUserId\Inbox\Messages $params = null): \InfobipSDK\DTOs\N1fab3d191d736425211a5879d4b2241fa0e80b8ab68239ab74531b9b6408a7a8\DeletionAcceptedResponse
    {
        /** @var \InfobipSDK\DTOs\N1fab3d191d736425211a5879d4b2241fa0e80b8ab68239ab74531b9b6408a7a8\DeletionAcceptedResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['externalUserId' => $externalUserId], parameters: $params);
        return $result;
    }
}
