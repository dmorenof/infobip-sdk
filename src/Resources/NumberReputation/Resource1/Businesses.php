<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberReputation\Resource1;

final class Businesses extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/number-reputation/1/businesses',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            502 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\\HiyaBusinessPage',
        'querySerialization' => [
            'status' => 'multi',
        ],
    ];

    /**
     * Get businesses
     *
     * Returns businesses registered under the customer's account with their current vetting status.
     */
    public function get(?\InfobipSDK\GetParams\NumberReputation\Resource1\Businesses $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\HiyaBusinessPage
    {
        /** @var \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\HiyaBusinessPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/number-reputation/1/businesses',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            502 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\\PublicCreateBusinessResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\\PublicCreateBusinessRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Register a new business
     *
     * Register a new business for verification. A business must be registered and vetted before phone numbers can be added to it.
     */
    public function post(\InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessRequest $payload): \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessResponse
    {
        /** @var \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_BUSINESS_ID = [
        'method' => 'DELETE',
        'path' => '/number-reputation/1/businesses/{businessId}',
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
            502 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            502 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Remove access to a business
     *
     * Disconnects API access to the registered business. The business will be deleted together with numbers registered to this business.
     * Note: There is a recurring service fee for all registered businesses, deleting a business will terminate that recurring fee for this business.
     */
    public function deleteByBusinessId(string $businessId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_BUSINESS_ID), path: ['businessId' => $businessId]);
        return;
    }

    private const array GET_BY_BUSINESS_ID = [
        'method' => 'GET',
        'path' => '/number-reputation/1/businesses/{businessId}',
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
            502 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            502 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\\PublicBusiness',
    ];

    /**
     * Get business
     *
     * Get a specific business registration by its ID.
     */
    public function getByBusinessId(string $businessId): \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicBusiness
    {
        /** @var \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicBusiness $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BUSINESS_ID), path: ['businessId' => $businessId]);
        return $result;
    }

    private const array PUT_BY_BUSINESS_ID = [
        'method' => 'PUT',
        'path' => '/number-reputation/1/businesses/{businessId}',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            502 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            502 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\\PublicCreateBusinessRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update business registration info
     *
     * Update business registration information. While a business is not in REGISTERED status yet, any field may be updated, and the update triggers a fresh verification attempt. Once a business reaches REGISTERED status, only the contact object can be updated.
     */
    public function putByBusinessId(string $businessId, \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessRequest $payload): void
    {
        $this->executeBody(self::operation(self::PUT_BY_BUSINESS_ID), $payload, path: ['businessId' => $businessId]);
        return;
    }

}
