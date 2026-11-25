<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageFlowBody
 */
final class MessagesApiMessageFlowBody extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBody
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'buttonText' => [
        'minLength' => 1,
    ],
    'id' => [
        'minLength' => 1,
    ],
    'text' => [
        'minLength' => 1,
    ],
    'token' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFlowAction $action;
    /**
     * Button label text.
     */
    public string $buttonText {
        set {
            $this->assigning('buttonText', $value);
            $this->buttonText = $value;
        }
    }
    /**
     * ID of the flow.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFlowMode $mode;
    /**
     * Text to be sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * Token of the flow.
     */
    public string $token {
        set {
            $this->assigning('token', $value);
            $this->token = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFlowMode::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
