<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotOpenUrlSettingsMediaPlayer
 */
final class ViberBotOpenUrlSettingsMediaPlayer extends \Dmorenof\SdkRuntime\DTO
{
    public bool $loop;
    public string $subtitle;
    public string $thumbnailUrl;
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'loop' => is_bool($value) ? $this->loop = $value : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
