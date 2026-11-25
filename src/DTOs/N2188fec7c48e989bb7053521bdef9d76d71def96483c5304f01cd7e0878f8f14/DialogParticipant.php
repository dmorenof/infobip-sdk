<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * DialogParticipant
 */
final class DialogParticipant extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'state',
    ];

    protected const array VALIDATION = [
        'duration' => [
            'format' => 'int32',
        ],
        'ringDuration' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Id of the call leg of this participant.
     */
    public string $callId;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallDirection $direction;
    /**
     * Number of seconds the participant spent in the call.
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Endpoint $endpoint;
    /**
     * Date and time the participant joined the call. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $joinTime;
    /**
     * Date and time the participant left the call. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $leaveTime;
    /**
     * Number of seconds needed for the participant to answer the call.
     * Format: int32
     */
    public int $ringDuration {
        set {
            $this->assigning('ringDuration', $value);
            $this->ringDuration = $value;
        }
    }
    /**
     * Date and time the call started. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $startTime;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DialogFinalState $state;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ParticipantType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallDirection::from($value) : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'joinTime' => is_string($value) ? $this->joinTime = $value : parent::assignMember($name, $value),
            'leaveTime' => is_string($value) ? $this->leaveTime = $value : parent::assignMember($name, $value),
            'ringDuration' => is_int($value) ? $this->ringDuration = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DialogFinalState::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ParticipantType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
