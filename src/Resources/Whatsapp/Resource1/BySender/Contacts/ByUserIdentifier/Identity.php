<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier;

final class Identity extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/whatsapp/1/{sender}/contacts/{userIdentifier}/identity',
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
            204,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
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
     * Delete identity
     *
     * Delete end user's identity. Feature is not enabled by default.
     * Documentation: https://www.infobip.com/docs/whatsapp/manage-integration/additional-functionalities#detect-identity-changes
     */
    public function delete(\InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: $identifier);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/whatsapp/1/{sender}/contacts/{userIdentifier}/identity',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\\IdentityInfo',
    ];

    /**
     * Get identity
     *
     * Get end user's identity info. Feature is not enabled by default.
     * Documentation: https://www.infobip.com/docs/whatsapp/manage-integration/additional-functionalities#detect-identity-changes
     */
    public function get(\InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity $identifier): \InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\IdentityInfo
    {
        /** @var \InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\IdentityInfo $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/whatsapp/1/{sender}/contacts/{userIdentifier}/identity',
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
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            409 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
                'type' => null,
                'schemaNullable' => false,
            ],
            409 => [
                'type' => null,
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\\IdentityConfirmation',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Confirm identity
     *
     * Confirm end user's identity. Feature is not enabled by default.
     * Documentation: https://www.infobip.com/docs/whatsapp/manage-integration/additional-functionalities#detect-identity-changes
     */
    public function put(\InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity $identifier, \InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\IdentityConfirmation $payload): void
    {
        $this->executeBody(self::operation(self::PUT), $payload, path: $identifier);
        return;
    }

}
