<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CaptureDtmf
 *
 * CaptureDtmf action collects DTMF input from the caller.
 */
final class CaptureDtmf extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'callback',
];

    protected const array VALIDATION = [
    'maxLength' => [
        'minimum' => 0,
        'maximum' => 30,
        'exclusiveMinimum' => 0,
        'format' => 'int32',
    ],
    'timeout' => [
        'minimum' => 1,
        'maximum' => 30,
        'format' => 'int32',
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureDtmf\ActionEnum $action;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureDtmfCallbackUrl $callback;
    /**
     * Maximum number of digits to capture.
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CapturePlayInstruction $play;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureSayInstruction $say;
    /**
     * DTMF digit that terminates input.
     */
    public string $terminator;
    /**
     * Timeout in seconds waiting for input.
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureDtmf\ActionEnum::from($value) : parent::assignMember($name, $value),
            'callback' => $value instanceof \stdClass ? $this->callback = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureDtmfCallbackUrl($value) : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'play' => $value instanceof \stdClass ? $this->play = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CapturePlayInstruction($value) : parent::assignMember($name, $value),
            'say' => $value instanceof \stdClass ? $this->say = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CaptureSayInstruction($value) : parent::assignMember($name, $value),
            'terminator' => is_string($value) ? $this->terminator = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
