<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class NetworkStatuses extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/number-registration/1/campaigns/{campaignId}/network-statuses',
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
            400 => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
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
                'type' => 'mixed',
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
        'responseType' => '\\InfobipSDK\\Collections\\NumberRegistration\\Resource1\\Campaigns\\ByCampaignId\\NetworkStatuses\\Get\\ByCampaignIdNetworkStatusesCollection',
    ];

    /**
     * Get Campaign Network Statuses
     *
     * Retrieves status of a registered campaign for each network.
     */
    public function get(string $campaignId): \InfobipSDK\Collections\NumberRegistration\Resource1\Campaigns\ByCampaignId\NetworkStatuses\Get\ByCampaignIdNetworkStatusesCollection
    {
        /** @var \InfobipSDK\Collections\NumberRegistration\Resource1\Campaigns\ByCampaignId\NetworkStatuses\Get\ByCampaignIdNetworkStatusesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaignId' => $campaignId]);
        return $result;
    }
}
