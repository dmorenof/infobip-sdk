<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * RoomCallDetails
 */
final class RoomCallDetails extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallDetails
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * List of participants of the call.
     */
    public \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RoomCallDetails\ParticipantsCollection $participants;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'participants' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->participants = new \InfobipSDK\Collections\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RoomCallDetails\ParticipantsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ConferenceParticipant::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
