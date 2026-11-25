<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Settings extends \InfobipSDK\Client
{
    private const array PATCH = [
        'method' => 'PATCH',
        'path' => '/vocalize/2/campaigns/{campaignId}/settings',
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\CampaignSettings',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update campaign settings
     *
     * Update the settings of a campaign with the specified ID.
     */
    public function patch(string $campaignId, \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignSettings $payload): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse
    {
        /** @var \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse $result */
        $result = $this->executeBody(self::operation(self::PATCH), $payload, path: ['campaignId' => $campaignId]);
        return $result;
    }

}
