<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * FlowParticipantsReportResponse
 *
 * Summary of processing status for participants in a given operation.
 */
final class FlowParticipantsReportResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'campaignId',
    'operationId',
    'participants',
];

    /**
     * Additional data will be passed in the request to your callback server along with the operation results report.
     */
    public ?string $callbackData;
    /**
     * Unique identifier of the flow campaign.
     * Example: 200000000000001
     * Format: int64
     */
    public int $campaignId;
    /**
     * Unique identifier of the operation.
     * Example: "03f2d474-0508-46bf-9f3d-d8e2c28adaea"
     */
    public string $operationId;
    /**
     * Array with information about each participant submitted for the operation.
     */
    public \InfobipSDK\Collections\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipantsReportResponse\ParticipantsCollection $participants;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => $value === null || is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignId' => is_int($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'operationId' => is_string($value) ? $this->operationId = $value : parent::assignMember($name, $value),
            'participants' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->participants = new \InfobipSDK\Collections\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipantsReportResponse\ParticipantsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
