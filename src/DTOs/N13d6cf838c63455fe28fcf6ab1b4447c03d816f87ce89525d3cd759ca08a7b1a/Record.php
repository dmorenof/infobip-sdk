<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Record
 *
 * Record action records a portion of the call. The recording starts at the moment where the Record action is added in the IVR.
 */
final class Record extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'record',
];

    protected const array VALIDATION = [
    'actionId' => [
        'format' => 'int32',
    ],
    'record' => [
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RecordOptions $options;
    /**
     * The duration to record for in seconds; null for unlimited.
     * Format: int32
     */
    public int $record {
        set {
            $this->assigning('record', $value);
            $this->record = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RecordOptions($value) : parent::assignMember($name, $value),
            'record' => is_int($value) ? $this->record = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
