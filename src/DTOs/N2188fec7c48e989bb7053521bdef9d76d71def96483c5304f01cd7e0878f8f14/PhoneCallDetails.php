<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * PhoneCallDetails
 */
final class PhoneCallDetails extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallDetails
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'dialogId' => [
        'maxLength' => 128,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DialogParticipant $callee;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DialogParticipant $caller;
    /**
     * Dialog identifier.
     */
    public string $dialogId {
        set {
            $this->assigning('dialogId', $value);
            $this->dialogId = $value;
        }
    }
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HangupSource $hangupSource;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\MachineDetectionResult $machineDetection;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callee' => $value instanceof \stdClass ? $this->callee = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DialogParticipant($value) : parent::assignMember($name, $value),
            'caller' => $value instanceof \stdClass ? $this->caller = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\DialogParticipant($value) : parent::assignMember($name, $value),
            'dialogId' => is_string($value) ? $this->dialogId = $value : parent::assignMember($name, $value),
            'hangupSource' => is_string($value) ? $this->hangupSource = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HangupSource::from($value) : parent::assignMember($name, $value),
            'machineDetection' => is_string($value) ? $this->machineDetection = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\MachineDetectionResult::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
