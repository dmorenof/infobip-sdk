<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Play TTY
 *
 * Play TTY action converts the provided text into Baudot tones and plays the generated audio, enabling the message to be displayed on a connected TTY device. This action is designed to support IVR scenarios adapted for users with hearing impairments.
 */
final class PlayTty extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'playTty',
];

    protected const array VALIDATION = [
    'actionId' => [
        'format' => 'int32',
    ],
    'playTty' => [
        'minLength' => 1,
    ],
];

    /**
     * User-defined ID of an action that can be used with go-to action.
     * Format: int32
     */
    public int $actionId {
        set {
            $this->assigning('actionId', $value);
            $this->actionId = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayTtyOptions $options;
    /**
     * Text that will be played in Baudot tones. The parameter can be constructed using variables.
     */
    public string $playTty {
        set {
            $this->assigning('playTty', $value);
            $this->playTty = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayTtyOptions($value) : parent::assignMember($name, $value),
            'playTty' => is_string($value) ? $this->playTty = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
