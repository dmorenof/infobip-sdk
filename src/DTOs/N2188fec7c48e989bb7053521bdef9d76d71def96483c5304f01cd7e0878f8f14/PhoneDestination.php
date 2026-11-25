<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * PhoneDestination
 */
final class PhoneDestination extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'from' => [
        'pattern' => '^[\\p{N}\\-_+=/.]+$',
    ],
    'phoneNumber' => [
        'minLength' => 1,
        'pattern' => '^[\\p{N}\\-_+=/.]+$',
    ],
];

    /**
     * Destination display name, if defined, that the call Link UI will use instead of an agent name. If a destination display name is an empty string, the UI will hide it.
     */
    public string $displayName;
    /**
     * Phone number displayed to a user as a caller in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HangupRestriction $hangupRestriction;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\MachineDetection $machineDetection;
    /**
     * Phone number of a callee in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'hangupRestriction' => $value instanceof \stdClass ? $this->hangupRestriction = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\HangupRestriction($value) : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\MachineDetection($value) : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
