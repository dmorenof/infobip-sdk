<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButtonBackgroundFrame
 */
final class ViberBotButtonBackgroundFrame extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'borderColor' => [
        'pattern' => '^[#]([A-Fa-f0-9]{6})$',
    ],
    'borderWidth' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
    'cornerRadius' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
];

    public string $borderColor {
        set {
            $this->assigning('borderColor', $value);
            $this->borderColor = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $borderWidth {
        set {
            $this->assigning('borderWidth', $value);
            $this->borderWidth = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $cornerRadius {
        set {
            $this->assigning('cornerRadius', $value);
            $this->cornerRadius = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'borderColor' => is_string($value) ? $this->borderColor = $value : parent::assignMember($name, $value),
            'borderWidth' => is_int($value) ? $this->borderWidth = $value : parent::assignMember($name, $value),
            'cornerRadius' => is_int($value) ? $this->cornerRadius = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
