<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ParticipantWithReasonProperties
 *
 * Properties of the events that provide `Participant` object and reason.
 */
final class ParticipantWithReasonProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Participant $participant;
    public string $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'participant' => $value instanceof \stdClass ? $this->participant = new \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Participant($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
