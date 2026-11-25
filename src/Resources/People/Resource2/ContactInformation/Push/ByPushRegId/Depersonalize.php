<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\ContactInformation\Push\ByPushRegId;

final class Depersonalize extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/people/2/contactInformation/push/{pushRegId}/depersonalize',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Depersonalize push instance
     *
     * You can depersonalize a device to detach it from a current person profile so that the device won’t receive messages when targeted by any of the person attributes
     */
    public function post(string $pushRegId, \InfobipSDK\PostParams\People\Resource2\ContactInformation\Push\ByPushRegId\Depersonalize $params): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['pushRegId' => $pushRegId], parameters: $params);
        return;
    }
}
