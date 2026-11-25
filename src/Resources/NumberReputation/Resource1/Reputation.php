<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberReputation\Resource1;

final class Reputation extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/number-reputation/1/reputation',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\\HiyaReputationListResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\\PublicCheckReputationRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Check reputation for phone numbers
     *
     * Query real-time reputation scores for registered phone numbers. This is a billable operation — each phone number in the request counts as one billable unit.
     */
    public function post(\InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCheckReputationRequest $payload): \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\HiyaReputationListResponse
    {
        /** @var \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\HiyaReputationListResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
