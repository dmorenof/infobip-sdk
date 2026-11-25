<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButtonBackground
 */
final class ViberBotButtonBackground extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'color' => [
        'pattern' => '^[#]([A-Fa-f0-9]{6})$',
    ],
];

    public string $color {
        set {
            $this->assigning('color', $value);
            $this->color = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonBackgroundFrame $frame;
    public bool $gifLoop;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotMediaScaleType $mediaScaleType;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotBackgroundMediaType $mediaType;
    public string $mediaUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'frame' => $value instanceof \stdClass ? $this->frame = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonBackgroundFrame($value) : parent::assignMember($name, $value),
            'gifLoop' => is_bool($value) ? $this->gifLoop = $value : parent::assignMember($name, $value),
            'mediaScaleType' => is_string($value) ? $this->mediaScaleType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotMediaScaleType::from($value) : parent::assignMember($name, $value),
            'mediaType' => is_string($value) ? $this->mediaType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotBackgroundMediaType::from($value) : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
