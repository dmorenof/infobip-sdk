<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Reset extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/vocalize/2/campaigns/{campaignId}/reset',
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
     * Delete campaign scores
     *
     * Delete all scores and attempts for a campaign with the specified ID. This action cannot be undone.
     */
    public function delete(string $campaignId): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['campaignId' => $campaignId]);
        return;
    }

}
