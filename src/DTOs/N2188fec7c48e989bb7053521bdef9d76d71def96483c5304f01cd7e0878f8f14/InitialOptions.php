<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * InitialOptions
 *
 * User options available when a user opens a call link page before initiating the call. Depending on the fields, certain options for the call will be shown to a user.
 */
final class InitialOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User will be able to initiate the audio call.
     */
    public bool $audio;
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CameraFacingMode $cameraFacingMode;
    /**
     * User will be muted once the call is established.
     */
    public bool $muted;
    /**
     * User will be able to configure settings before a call.
     */
    public bool $settings;
    /**
     * User will be able to initiate the video call.
     */
    public bool $video;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audio' => is_bool($value) ? $this->audio = $value : parent::assignMember($name, $value),
            'cameraFacingMode' => is_string($value) ? $this->cameraFacingMode = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CameraFacingMode::from($value) : parent::assignMember($name, $value),
            'muted' => is_bool($value) ? $this->muted = $value : parent::assignMember($name, $value),
            'settings' => is_bool($value) ? $this->settings = $value : parent::assignMember($name, $value),
            'video' => is_bool($value) ? $this->video = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
