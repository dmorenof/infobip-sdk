<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveFlowActionPayload
 *
 * Required when flowAction is set to 'NAVIGATE. Should be omitted otherwise.
 */
final class InteractiveFlowActionPayload extends \Dmorenof\SdkRuntime\DTO
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
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveFlowActionPayload\DataMap $data;
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
