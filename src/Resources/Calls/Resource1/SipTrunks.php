<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1;

final class SipTrunks extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/calls/1/sip-trunks',
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
        'responseType' => '\\InfobipSDK\\DTOs\\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\\SipTrunkPage',
    ];

    /**
     * Get SIP trunks
     *
     * Get SIP trunks with pagination.
     */
    public function get(?\InfobipSDK\GetParams\Calls\Resource1\SipTrunks $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkPage
    {
        /** @var \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/sip-trunks',
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
            202,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\CreateSipTrunkResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\\SipTrunkRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create SIP trunk
     *
     * Create a SIP trunk. Fields not sent in request body will take default values. This operation is asynchronous. The SIP trunk will be created in the background.
     */
    public function post(\InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkRequest $payload): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\CreateSipTrunkResponse
    {
        /** @var \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\CreateSipTrunkResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_SIP_TRUNK_ID = [
        'method' => 'DELETE',
        'path' => '/calls/1/sip-trunks/{sipTrunkId}',
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
            202,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkResponse',
    ];

    /**
     * Delete SIP trunk
     *
     * Delete a SIP trunk. This operation is asynchronous. The SIP trunk will be deleted in the background.
     */
    public function deleteBySipTrunkId(string $sipTrunkId): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
    {
        /** @var \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_SIP_TRUNK_ID), path: ['sipTrunkId' => $sipTrunkId]);
        return $result;
    }

    private const array GET_BY_SIP_TRUNK_ID = [
        'method' => 'GET',
        'path' => '/calls/1/sip-trunks/{sipTrunkId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkResponse',
    ];

    /**
     * Get SIP trunk
     *
     * Get a single SIP trunk.
     */
    public function getBySipTrunkId(string $sipTrunkId): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
    {
        /** @var \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SIP_TRUNK_ID), path: ['sipTrunkId' => $sipTrunkId]);
        return $result;
    }

    private const array PUT_BY_SIP_TRUNK_ID = [
        'method' => 'PUT',
        'path' => '/calls/1/sip-trunks/{sipTrunkId}',
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
            202,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\\SipTrunkUpdateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update SIP trunk
     *
     * Update a SIP trunk. Fields not sent in request body will take default values and overwrite the existing ones. This operation is asynchronous. The SIP trunk will be updated in the background.
     */
    public function putBySipTrunkId(string $sipTrunkId, \InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkUpdateRequest $payload): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
    {
        /** @var \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_SIP_TRUNK_ID), $payload, path: ['sipTrunkId' => $sipTrunkId]);
        return $result;
    }

}
