<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc;

/**
 * Participant
 */
final class Participant extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'endpoint',
];

    protected const array VALIDATION = [
    'callId' => [
        'maxLength' => 128,
    ],
];

    /**
     * Participant call ID.
     */
    public string $callId {
        set {
            $this->assigning('callId', $value);
            $this->callId = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint $endpoint;
    /**
     * Date and time when the participant has joined.
     * Format: date-time
     */
    public string $joinTime;
    /**
     * Date and time when the participant has left.
     * Format: date-time
     */
    public string $leaveTime;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaProperties $media;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Role $role;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ParticipantState $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint($value) : parent::assignMember($name, $value),
            'joinTime' => is_string($value) ? $this->joinTime = $value : parent::assignMember($name, $value),
            'leaveTime' => is_string($value) ? $this->leaveTime = $value : parent::assignMember($name, $value),
            'media' => $value instanceof \stdClass ? $this->media = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaProperties($value) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ParticipantState::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
