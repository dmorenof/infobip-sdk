<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * CallOptions
 *
 * User options available during a call. Depending on the fields, certain options for a call will be shown to a user.
 */
final class CallOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User will be able to toggle the video during the call.
     */
    public bool $camera;
    /**
     * Users will be able to open the chat box and send and receive text messages that are visible to all the participants. This is applicable only for the ROOM call type. Messages sent before joining the room are not visible.
     */
    public bool $chat;
    /**
     * User will be able to use dial pad for DTMF, during the call.
     */
    public bool $dialPad;
    /**
     * User will be able to mute themselves during the call.
     */
    public bool $mute;
    /**
     * User will be able to see if the call is being recorded.
     */
    public bool $recordingIndicator;
    /**
     * User will be able to share the screen during the call.
     */
    public bool $screenShare;
    /**
     * User will be able to access settings during the call.
     */
    public bool $settings;
    /**
     * User will be able to switch between front-facing and back camera during the call.
     */
    public bool $switchCameraFacingMode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'camera' => is_bool($value) ? $this->camera = $value : parent::assignMember($name, $value),
            'chat' => is_bool($value) ? $this->chat = $value : parent::assignMember($name, $value),
            'dialPad' => is_bool($value) ? $this->dialPad = $value : parent::assignMember($name, $value),
            'mute' => is_bool($value) ? $this->mute = $value : parent::assignMember($name, $value),
            'recordingIndicator' => is_bool($value) ? $this->recordingIndicator = $value : parent::assignMember($name, $value),
            'screenShare' => is_bool($value) ? $this->screenShare = $value : parent::assignMember($name, $value),
            'settings' => is_bool($value) ? $this->settings = $value : parent::assignMember($name, $value),
            'switchCameraFacingMode' => is_bool($value) ? $this->switchCameraFacingMode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
