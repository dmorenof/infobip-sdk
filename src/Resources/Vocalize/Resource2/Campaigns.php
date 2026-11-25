<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Vocalize\Resource2;

final class Campaigns extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/vocalize/2/campaigns',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\CampaignResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\CampaignCreatePayload',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create campaign
     *
     * Create a new campaign with the specified parameters.
     */
    public function post(\InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignCreatePayload $payload): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse
    {
        /** @var \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CAMPAIGN_ID = [
        'method' => 'DELETE',
        'path' => '/vocalize/2/campaigns/{campaignId}',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError404',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
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
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError404',
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
    ];

    /**
     * Delete campaign
     *
     * Delete a campaign with the specified ID.
     */
    public function deleteByCampaignId(string $campaignId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CAMPAIGN_ID), path: ['campaignId' => $campaignId]);
        return;
    }

    private const array GET_BY_CAMPAIGN_ID = [
        'method' => 'GET',
        'path' => '/vocalize/2/campaigns/{campaignId}',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError404',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
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
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError404',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\CampaignResponse',
    ];

    /**
     * Get campaign
     *
     * Get a campaign by its ID.
     */
    public function getByCampaignId(string $campaignId): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse
    {
        /** @var \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CAMPAIGN_ID), path: ['campaignId' => $campaignId]);
        return $result;
    }
}
