<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberRegistration\Resource1\Campaigns\ByCampaignId;

final class Numbers extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/number-registration/1/campaigns/{campaignId}/numbers',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\NumberPreviews',
    ];

    /**
     * Get Campaign numbers
     *
     * Retrieves all the numbers associated with a campaign, regardless of the stage, by its ID.
     */
    public function get(string $campaignId): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreviews
    {
        /** @var \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreviews $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaignId' => $campaignId]);
        return $result;
    }

}
