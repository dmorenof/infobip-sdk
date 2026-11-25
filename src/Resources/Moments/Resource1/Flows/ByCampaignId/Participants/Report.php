<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Moments\Resource1\Flows\ByCampaignId\Participants;

final class Report extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/moments/1/flows/{campaignId}/participants/report',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\\FlowParticipantsReportResponse',
    ];

    /**
     * Get a report on participants added to flow
     *
     * Use this API endpoint to fetch a report to confirm that all persons have been successfully added to the flow.
     *                 Please note that report is stored for 30 days.
     */
    public function get(int $campaignId, \InfobipSDK\GetParams\Moments\Resource1\Flows\ByCampaignId\Participants\Report $params): \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipantsReportResponse
    {
        /** @var \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipantsReportResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaignId' => $campaignId], parameters: $params);
        return $result;
    }

}
