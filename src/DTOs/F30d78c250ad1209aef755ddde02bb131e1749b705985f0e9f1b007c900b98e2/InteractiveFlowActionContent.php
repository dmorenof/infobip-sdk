<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveFlowActionContent
 *
 * Allows you to specify flow message details.
 */
final class InteractiveFlowActionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'callToActionButton',
        'flowId',
        'flowToken',
    ];

    protected const array VALIDATION = [
        'callToActionButton' => [
            'minLength' => 1,
            'maxLength' => 20,
        ],
        'flowId' => [
            'minLength' => 1,
        ],
        'flowMessageVersion' => [
            'format' => 'int32',
        ],
        'flowToken' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Call to action button text.
     */
    public string $callToActionButton {
        set {
            $this->assigning('callToActionButton', $value);
            $this->callToActionButton = $value;
        }
    }
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowAction $flowAction;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowActionPayload $flowActionPayload;
    /**
     * ID of the registered flow.
     */
    public string $flowId {
        set {
            $this->assigning('flowId', $value);
            $this->flowId = $value;
        }
    }
    /**
     * Version of the flow message.
     * Format: int32
     */
    public int $flowMessageVersion {
        set {
            $this->assigning('flowMessageVersion', $value);
            $this->flowMessageVersion = $value;
        }
    }
    /**
     * Flow token that should serve as an identifier.
     */
    public string $flowToken {
        set {
            $this->assigning('flowToken', $value);
            $this->flowToken = $value;
        }
    }
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowActionMode $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callToActionButton' => is_string($value) ? $this->callToActionButton = $value : parent::assignMember($name, $value),
            'flowAction' => is_string($value) ? $this->flowAction = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowAction::from($value) : parent::assignMember($name, $value),
            'flowActionPayload' => $value instanceof \stdClass ? $this->flowActionPayload = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowActionPayload($value) : parent::assignMember($name, $value),
            'flowId' => is_string($value) ? $this->flowId = $value : parent::assignMember($name, $value),
            'flowMessageVersion' => is_int($value) ? $this->flowMessageVersion = $value : parent::assignMember($name, $value),
            'flowToken' => is_string($value) ? $this->flowToken = $value : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowActionMode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
