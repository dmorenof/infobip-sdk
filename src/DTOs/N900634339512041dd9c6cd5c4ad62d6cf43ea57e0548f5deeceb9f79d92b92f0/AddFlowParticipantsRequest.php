<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * AddFlowParticipantsRequest
 *
 * Request to add given participants to the Flow campaign.
 */
final class AddFlowParticipantsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'participants',
    ];

    protected const array VALIDATION = [
        'callbackData' => [
            'maxLength' => 2000,
        ],
        'notifyUrl' => [
            'maxLength' => 1000,
        ],
    ];

    /**
     * Additional data will be passed in the request to your callback server along with the operation results report.
     */
    public ?string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * The URL on your callback server on which a report of operation results will be sent.
     */
    public ?string $notifyUrl {
        set {
            $this->assigning('notifyUrl', $value);
            $this->notifyUrl = $value;
        }
    }
    /**
     * Array of participants to add.
     */
    public \InfobipSDK\Collections\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsRequest\ParticipantsCollection $participants;
    /**
     * If identifier refer to multiple existing profiles - set to true to prevent merging to single person. Participant won't be added to campaign.
     */
    public ?bool $skipMergeDuplicates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => $value === null || is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'notifyUrl' => $value === null || is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'participants' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->participants = new \InfobipSDK\Collections\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantsRequest\ParticipantsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipant::class)) : parent::assignMember($name, $value),
            'skipMergeDuplicates' => $value === null || is_bool($value) ? $this->skipMergeDuplicates = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
