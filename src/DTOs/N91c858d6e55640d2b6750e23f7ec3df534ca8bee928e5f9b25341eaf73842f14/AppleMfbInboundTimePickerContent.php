<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbInboundTimePickerContent
 */
final class AppleMfbInboundTimePickerContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'requestIdentifier' => [
            'minLength' => 1,
        ],
        'selectedDuration' => [
            'format' => 'int32',
        ],
        'timezoneOffset' => [
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context $context;
    /**
     * Request Identifier.
     */
    public string $requestIdentifier {
        set {
            $this->assigning('requestIdentifier', $value);
            $this->requestIdentifier = $value;
        }
    }
    /**
     * An integer representing the duration of the time slot, in seconds.
     * Format: int32
     */
    public int $selectedDuration {
        set {
            $this->assigning('selectedDuration', $value);
            $this->selectedDuration = $value;
        }
    }
    /**
     * Selected Time (UTC date).
     * Format: date-time
     */
    public string $selectedTime;
    /**
     * Selected TimeItem Identifier.
     */
    public string $selectedTimeslotIdentifier;
    /**
     * An integer representing the number of minutes from GMT.
     * Format: int32
     */
    public int $timezoneOffset {
        set {
            $this->assigning('timezoneOffset', $value);
            $this->timezoneOffset = $value;
        }
    }
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context($value) : parent::assignMember($name, $value),
            'requestIdentifier' => is_string($value) ? $this->requestIdentifier = $value : parent::assignMember($name, $value),
            'selectedDuration' => is_int($value) ? $this->selectedDuration = $value : parent::assignMember($name, $value),
            'selectedTime' => is_string($value) ? $this->selectedTime = $value : parent::assignMember($name, $value),
            'selectedTimeslotIdentifier' => is_string($value) ? $this->selectedTimeslotIdentifier = $value : parent::assignMember($name, $value),
            'timezoneOffset' => is_int($value) ? $this->timezoneOffset = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
