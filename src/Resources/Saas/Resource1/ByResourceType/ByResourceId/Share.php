<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Saas\Resource1\ByResourceType\ByResourceId;

final class Share extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/saas/1/{resourceType}/{resourceId}/share',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'success' => [
            202,
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
        'responseType' => '\\InfobipSDK\\DTOs\\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\\ShareResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\\ShareRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Share SaaS resource
     *
     * Use this endpoint to share a SaaS resource with other accounts. You can check the status of your share request [here](https://www.infobip.com/docs/api/customer-engagement/common-assets/saas-request-status).
     */
    public function post(\InfobipSDK\PathParams\Saas\Resource1\ByResourceType\ByResourceId\Share $identifier, \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ShareRequest $payload): \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ShareResponse
    {
        /** @var \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ShareResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

}
