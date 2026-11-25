<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Stats extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/vocalize/2/campaigns/{campaignId}/stats',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\CampaignStatsResponse',
    ];

    /**
     * Get campaign statistics
     *
     * Get statistics for a campaign, including total scores, attempts, and more.
     */
    public function get(string $campaignId): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignStatsResponse
    {
        /** @var \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignStatsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaignId' => $campaignId]);
        return $result;
    }

}
