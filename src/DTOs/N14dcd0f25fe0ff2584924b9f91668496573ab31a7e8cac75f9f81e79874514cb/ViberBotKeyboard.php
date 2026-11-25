<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotKeyboard
 *
 * Replaces device’s native keyboard. The client will always display the last keyboard that was sent to it.
 */
final class ViberBotKeyboard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'buttonGrid',
];

    protected const array VALIDATION = [
    'backgroundColor' => [
        'pattern' => '^[#]([A-Fa-f0-9]{6})$',
    ],
];

    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\InputFieldState $actionBarState;
    /**
     * Background color of the keyboard
     */
    public string $backgroundColor {
        set {
            $this->assigning('backgroundColor', $value);
            $this->backgroundColor = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonGrid $buttonGrid;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboardDisplay $keyboardDisplay;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionBarState' => is_string($value) ? $this->actionBarState = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\InputFieldState::from($value) : parent::assignMember($name, $value),
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'buttonGrid' => $value instanceof \stdClass ? $this->buttonGrid = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonGrid($value) : parent::assignMember($name, $value),
            'keyboardDisplay' => $value instanceof \stdClass ? $this->keyboardDisplay = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboardDisplay($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
