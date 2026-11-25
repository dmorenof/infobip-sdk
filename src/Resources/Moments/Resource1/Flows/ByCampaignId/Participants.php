<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Moments\Resource1\Flows\ByCampaignId;

final class Participants extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/moments/1/flows/{campaignId}/participants',
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
            400 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\\ExceptionResponse',
            429 => '\\InfobipSDK\\DTOs\\N8a96177a069f927b552e6f478d6833812472502f930c109564e4f89f3264faaa\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\\AnyOfBadRequestResponse',
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
                'type' => '\\InfobipSDK\\DTOs\\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\\ExceptionResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\N8a96177a069f927b552e6f478d6833812472502f930c109564e4f89f3264faaa\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\\AddFlowParticipantsResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\\AddFlowParticipantsRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

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
    public function post(int $campaignId, \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsRequest $payload): \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsResponse
    {
        /** @var \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['campaignId' => $campaignId]);
        return $result;
    }

}
