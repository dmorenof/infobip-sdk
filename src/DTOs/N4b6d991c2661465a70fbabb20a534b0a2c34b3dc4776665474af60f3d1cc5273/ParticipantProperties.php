<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4b6d991c2661465a70fbabb20a534b0a2c34b3dc4776665474af60f3d1cc5273;

/**
 * ParticipantProperties
 *
 * Properties of the events that provide `Participant` object.
 */
final class ParticipantProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Participant $participant;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'participant' => $value instanceof \stdClass ? $this->participant = new \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Participant($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
