<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1\SipTrunks;

final class ServiceAddresses extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/calls/1/sip-trunks/service-addresses',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\\SipTrunkServiceAddressPage',
    ];

    /**
     * Get SIP trunk service addresses
     *
     * Get SIP trunk service addresses.
     */
    public function get(?\InfobipSDK\GetParams\Calls\Resource1\SipTrunks\ServiceAddresses $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkServiceAddressPage
    {
        /** @var \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkServiceAddressPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/sip-trunks/service-addresses',
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
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\\PublicSipTrunkServiceAddress',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\\PublicSipTrunkServiceAddressRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create SIP trunk service address
     *
     * Create a SIP trunk service address.
     */
    public function post(\InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddressRequest $payload): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        /** @var \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_SIP_TRUNK_SERVICE_ADDRESS_ID = [
        'method' => 'DELETE',
        'path' => '/calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId}',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\\PublicSipTrunkServiceAddress',
    ];

    /**
     * Delete SIP trunk service address
     *
     * Delete SIP trunk service address.
     */
    public function deleteBySipTrunkServiceAddressId(string $sipTrunkServiceAddressId): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        /** @var \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_SIP_TRUNK_SERVICE_ADDRESS_ID), path: ['sipTrunkServiceAddressId' => $sipTrunkServiceAddressId]);
        return $result;
    }

    private const array GET_BY_SIP_TRUNK_SERVICE_ADDRESS_ID = [
        'method' => 'GET',
        'path' => '/calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId}',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\\PublicSipTrunkServiceAddress',
    ];

    /**
     * Get SIP trunk service address
     *
     * Get SIP trunk service address.
     */
    public function getBySipTrunkServiceAddressId(string $sipTrunkServiceAddressId): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        /** @var \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SIP_TRUNK_SERVICE_ADDRESS_ID), path: ['sipTrunkServiceAddressId' => $sipTrunkServiceAddressId]);
        return $result;
    }

    private const array PUT_BY_SIP_TRUNK_SERVICE_ADDRESS_ID = [
        'method' => 'PUT',
        'path' => '/calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId}',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\\PublicSipTrunkServiceAddress',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\\PublicSipTrunkServiceAddressRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update SIP trunk service address
     *
     * Update SIP trunk service address.
     */
    public function putBySipTrunkServiceAddressId(string $sipTrunkServiceAddressId, \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddressRequest $payload): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        /** @var \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_SIP_TRUNK_SERVICE_ADDRESS_ID), $payload, path: ['sipTrunkServiceAddressId' => $sipTrunkServiceAddressId]);
        return $result;
    }

}
