<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\People\Resource2\ContactInformation;

final class Push extends \InfobipSDK\Client
{
    private const array GET_BY_PUSH_REG_ID = [
        'method' => 'GET',
        'path' => '/people/2/contactInformation/push/{pushRegId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushApiInstance',
    ];

    /**
     * Get push device registration
     *
     * Use this method to get device data
     */
    public function getByPushRegId(string $pushRegId, \InfobipSDK\GetParams\People\Resource2\ContactInformation\Push\ByPushRegId $params): \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance
    {
        /** @var \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PUSH_REG_ID), path: ['pushRegId' => $pushRegId], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_PUSH_REG_ID = [
        'method' => 'PATCH',
        'path' => '/people/2/contactInformation/push/{pushRegId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushApiInstance',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\\PushApiInstance',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update push device registration
     *
     * Use this method to update device data
     */
    public function patchByPushRegId(string $pushRegId, \InfobipSDK\PatchParams\People\Resource2\ContactInformation\Push\ByPushRegId $params): \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance
    {
        /** @var \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_PUSH_REG_ID), path: ['pushRegId' => $pushRegId], parameters: $params);
        return $result;
    }

}
