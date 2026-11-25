<?php

declare(strict_types=1);

namespace InfobipSDK\Moments\Resource1\Flows\ByCampaignId;

final class Participants extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /moments/1/flows/{campaignId}/participants [operationId: add-flow-participants] */
    /**
     * Add participants to flow
     *
     * Use this endpoint to add participants to a flow, accommodating anywhere from 1 to 1000 persons.
     *                 When participants are added, their profiles in People are automatically created, updated or merged based on the identifiers provided.<br>
     *                 If identifiers are unique, a new profile is created.<br>
     *                 If identifiers match an existing profile, then that profile is updated.<br>
     *                 If identifiers refer to multiple existing profiles or are not unique within the request, profiles are merged.<br>
     *                 To prevent unwanted merges, ensure each participant's identifiers
     *                 (<code>identifyBy</code>, <code>externalId</code> and <code>contactInformation</code>) are unique.<br>
     *                 Optional parameter <code>skipMergeDuplicates</code> might be used to prevent merging to single person. Participant won't be added to campaign in this case.
     */
    public static function post(int $campaignId, \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsRequest $payload): \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Moments\Resource1\Flows\ByCampaignId\Participants::class)->post($campaignId, $payload);
    }

}
