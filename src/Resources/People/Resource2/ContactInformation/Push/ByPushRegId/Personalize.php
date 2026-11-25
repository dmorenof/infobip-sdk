<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\ContactInformation\Push\ByPushRegId;

final class Personalize extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/people/2/contactInformation/push/{pushRegId}/personalize',
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
            400 => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushApiErrorResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushApiErrorResponse',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushUserPersonalizationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushUserPersonalizationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Personalize push instance
     *
     * Each person can have Phone numbers, Emails or External ID. These fields are unique identifiers of a person on Infobip platform and provide a capability to personalize any push device registration with a person profile. The platform provides data grouping functions based on these parameters. For example, if two devices will try to save the same Phone number, then both of them will be collected under a single person. Phone number, Email and External ID are also widely used when targeting users with messages across different channels via Infobip platform.
     */
    public function post(string $pushRegId, \InfobipSDK\PostParams\People\Resource2\ContactInformation\Push\ByPushRegId\Personalize $params): \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserPersonalizationResponse
    {
        /** @var \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserPersonalizationResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['pushRegId' => $pushRegId], parameters: $params);
        return $result;
    }
}
