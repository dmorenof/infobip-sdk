<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageFlowActionPayload
 *
 * Payload of the action.
 */
final class MessagesApiMessageFlowActionPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'screen',
    ];

    protected const array VALIDATION = [
        'screen' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Input data for first screen of the flow. Must be a non-empty object.
     */
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFlowActionPayload\DataMap $data;
    /**
     * ID of the first screen of the flow.
     */
    public string $screen {
        set {
            $this->assigning('screen', $value);
            $this->screen = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'screen' => is_string($value) ? $this->screen = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
