<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberRegistration\Resource1\AutomaticReview;

final class Campaigns extends \InfobipSDK\Client
{
    private const array POST_BY_CAMPAIGN_UUID = [
        'method' => 'POST',
        'path' => '/number-registration/1/automatic-review/campaigns/{campaignUuid}',
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
            202,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ReviewSubmissionResponse',
    ];

    /**
     * Submit Existing Campaign for AI Review
     *
     * Submits an existing campaign for automatic AI compliance review. Returns a request UUID that can be used to fetch the review results. Contact your account manager to learn more.
     */
    public function postByCampaignUuid(string $campaignUuid): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ReviewSubmissionResponse
    {
        /** @var \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ReviewSubmissionResponse $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CAMPAIGN_UUID), path: ['campaignUuid' => $campaignUuid]);
        return $result;
    }
}
