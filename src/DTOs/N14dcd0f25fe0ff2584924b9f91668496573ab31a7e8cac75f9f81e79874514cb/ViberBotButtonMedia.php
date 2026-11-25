<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButtonMedia
 */
final class ViberBotButtonMedia extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotMediaScaleType $imageScaleType;
    public string $imageUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageScaleType' => is_string($value) ? $this->imageScaleType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotMediaScaleType::from($value) : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
