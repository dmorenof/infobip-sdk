<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButtonText
 */
final class ViberBotButtonText extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'backgroundGradientColor' => [
            'pattern' => '^[#]([A-Fa-f0-9]{6})$',
        ],
        'opacity' => [
            'minimum' => 0,
            'maximum' => 100,
            'format' => 'int32',
        ],
    ];

    public string $backgroundGradientColor {
        set {
            $this->assigning('backgroundGradientColor', $value);
            $this->backgroundGradientColor = $value;
        }
    }
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotTextHorizontalAlign $horizontalAlign;
    /**
     * Format: int32
     */
    public int $opacity {
        set {
            $this->assigning('opacity', $value);
            $this->opacity = $value;
        }
    }
    public \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText\PaddingsCollection $paddings;
    public bool $shouldFit;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotTextSize $size;
    public string $text;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotTextVerticalAlign $verticalAlign;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundGradientColor' => is_string($value) ? $this->backgroundGradientColor = $value : parent::assignMember($name, $value),
            'horizontalAlign' => is_string($value) ? $this->horizontalAlign = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotTextHorizontalAlign::from($value) : parent::assignMember($name, $value),
            'opacity' => is_int($value) ? $this->opacity = $value : parent::assignMember($name, $value),
            'paddings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->paddings = new \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText\PaddingsCollection($value) : parent::assignMember($name, $value),
            'shouldFit' => is_bool($value) ? $this->shouldFit = $value : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotTextSize::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'verticalAlign' => is_string($value) ? $this->verticalAlign = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotTextVerticalAlign::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
