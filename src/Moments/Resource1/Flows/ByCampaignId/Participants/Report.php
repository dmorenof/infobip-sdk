<?php

declare(strict_types=1);

namespace InfobipSDK\Moments\Resource1\Flows\ByCampaignId\Participants;

final class Report extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /moments/1/flows/{campaignId}/participants/report [operationId: get-flow-participants-added-report] */
    /**
     * Get a report on participants added to flow
     *
     * Use this API endpoint to fetch a report to confirm that all persons have been successfully added to the flow.
     *                 Please note that report is stored for 30 days.
     */
    public static function get(int $campaignId, \InfobipSDK\GetParams\Moments\Resource1\Flows\ByCampaignId\Participants\Report $params): \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipantsReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Moments\Resource1\Flows\ByCampaignId\Participants\Report::class)->get($campaignId, $params);
    }

}
