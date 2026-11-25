<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Dial
 *
 * Dial action connects the call to one or more endpoints.
 */
final class Dial extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'endpoints',
];

    protected const array VALIDATION = [
    'connectTimeout' => [
        'minimum' => 1,
        'maximum' => 30,
        'format' => 'int32',
    ],
    'endpoints' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
    'hangupOn' => [
        'minLength' => 0,
        'maxLength' => 1,
    ],
    'maxDuration' => [
        'format' => 'int32',
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Dial\ActionEnum $action;
    /**
     * Whether to answer the call before connecting to endpoints. This value is applied only when `dial` is executed on unanswered call.
     */
    public bool $answerBeforeConnecting;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl $callback;
    /**
     * Connection timeout in seconds.
     * Format: int32
     */
    public int $connectTimeout {
        set {
            $this->assigning('connectTimeout', $value);
            $this->connectTimeout = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl $endpointCallback;
    /**
     * List of endpoints to dial (1 to 10).
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Dial\EndpointsCollection $endpoints {
        set {
            $this->assigning('endpoints', $value);
            $this->endpoints = $value;
        }
    }
    /**
     * Caller ID to use when dialing.
     */
    public string $from;
    /**
     * Digit to press to hang up the call.
     */
    public string $hangupOn {
        set {
            $this->assigning('hangupOn', $value);
            $this->hangupOn = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MachineDetection $machineDetection;
    /**
     * Maximum call duration in seconds.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DialRecording $recording;
    /**
     * URL of the remote ring tone audio file to play while connecting. If it cannot be played, the default ring tone will be played.
     */
    public string $ringTone;
    /**
     * DTMF digits to send after endpoint answered, but before connecting to the endpoint. `W` and `w` characters are supported to introduce one-second and half-second pause.
     */
    public string $sendDtmf;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Dial\ActionEnum::from($value) : parent::assignMember($name, $value),
            'answerBeforeConnecting' => is_bool($value) ? $this->answerBeforeConnecting = $value : parent::assignMember($name, $value),
            'callback' => $value instanceof \stdClass ? $this->callback = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            'connectTimeout' => is_int($value) ? $this->connectTimeout = $value : parent::assignMember($name, $value),
            'endpointCallback' => $value instanceof \stdClass ? $this->endpointCallback = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            'endpoints' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->endpoints = new \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Dial\EndpointsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint::class)) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'hangupOn' => is_string($value) ? $this->hangupOn = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MachineDetection($value) : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DialRecording($value) : parent::assignMember($name, $value),
            'ringTone' => is_string($value) ? $this->ringTone = $value : parent::assignMember($name, $value),
            'sendDtmf' => is_string($value) ? $this->sendDtmf = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
