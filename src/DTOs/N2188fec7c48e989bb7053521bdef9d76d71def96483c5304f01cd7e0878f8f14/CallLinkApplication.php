<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * CallLinkApplication
 */
final class CallLinkApplication extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallLinkRecordingApplication
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Call link configuration ID used for the recorded call.
     */
    public string $callLinkConfigId;
    /**
     * Call link ID used for the recorded call.
     */
    public string $callLinkId;
    /**
     * Destination the call was made towards. For WEBRTC calls, this is the WebRTC identity. For PHONE calls, this is the phone number. For ROOM calls, this is the room name.
     */
    public string $destinationData;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallLinkDestination $destinationType;
    /**
     * Date and time when the (last) call recording ended.
     * Format: date-time
     */
    public string $endTime;
    /**
     * Call link recording identifier.
     */
    public string $id;
    /**
     * Date and time when the (first) call recording started.
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callLinkConfigId' => is_string($value) ? $this->callLinkConfigId = $value : parent::assignMember($name, $value),
            'callLinkId' => is_string($value) ? $this->callLinkId = $value : parent::assignMember($name, $value),
            'destinationData' => is_string($value) ? $this->destinationData = $value : parent::assignMember($name, $value),
            'destinationType' => is_string($value) ? $this->destinationType = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallLinkDestination::from($value) : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
