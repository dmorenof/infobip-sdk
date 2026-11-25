<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool;

final class Attach extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/number-registration/1/campaigns/{campaignId}/number-pool/attach',
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
            400 => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
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
            'type' => '\\InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\AttachNumberPoolRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Attach Number Pool to Campaign
     *
     * Associates an existing number pool with a campaign. Number pooling is required when a campaign utilizes more than 49 numbers. This is common in high-throughput environments such as call centers. Attaching a number pool ensures proper provisioning and compliance with carrier requirements.
     */
    public function post(string $campaignId, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AttachNumberPoolRequest $payload): void
    {
        $this->executeBody(self::operation(self::POST), $payload, path: ['campaignId' => $campaignId]);
        return;
    }
}
