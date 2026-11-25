<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Play From Recording
 *
 * Play from Recording Action plays audio recorded from the current or some other call.
 */
final class PlayFromRecording extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'playFromRecording',
    ];

    protected const array VALIDATION = [
        'actionId' => [
            'format' => 'int32',
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
    /**
     * Identifier of the recorded file. The parameter can be constructed using variables.
     */
    public string $playFromRecording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'playFromRecording' => is_string($value) ? $this->playFromRecording = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
