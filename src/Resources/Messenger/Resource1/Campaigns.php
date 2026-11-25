<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Messenger\Resource1;

final class Campaigns extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/messenger/1/campaigns',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\\GetCampaignsResponse',
    ];

    /**
     * Get campaigns
     *
     * Returns all Facebook Messenger marketing campaigns for the authenticated account.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public function get(): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetCampaignsResponse
    {
        /** @var \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetCampaignsResponse $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/messenger/1/campaigns',
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
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\\CampaignResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\\CampaignRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create campaign
     *
     * Create a new Facebook Messenger marketing campaign to send marketing messages to opted-in users. The campaign is associated with your ad account and Facebook page.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public function post(\InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CampaignRequest $payload): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CampaignResponse
    {
        /** @var \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CampaignResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CAMPAIGN_ID = [
        'method' => 'DELETE',
        'path' => '/messenger/1/campaigns/{campaignId}',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
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
    ];

    /**
     * Delete campaign
     *
     * Delete an existing Facebook Messenger marketing campaign.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public function deleteByCampaignId(string $campaignId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CAMPAIGN_ID), path: ['campaignId' => $campaignId]);
        return;
    }

}
