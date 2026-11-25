<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * TransferStrategyApiModel
 * Example: {"id":"642bf5f4ff5dd177aeb00889","musicOnHold":{"enabled":true,"useDefault":false,"fileAudioSource":{"fileDescriptor":"f829e911-8439-4321-aa25-23b321e1a9cb"}},"announcementMessage":{"enabled":true,"audioSourceType":"TTS","ttsAudioSource":{"text":"You're are being transferred...","language":"en","voice":{"name":"Joanna","gender":"FEMALE"},"speechRate":1},"fileAudioSource":null,"repeatInterval":{"unit":"SECONDS","value":5}},"createdAt":"2023-04-04T10:03:32.729Z","updatedAt":"2023-04-06T11:22:18.149Z"}
 */
final class TransferStrategyApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'createdAt',
        'id',
        'updatedAt',
    ];

    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileOrTtsAudioSourceWithRepeatIntervalApiModel $announcementMessage;
    /**
     * Example: "2023-04-04T10:03:32.729+0000"
     */
    public string $createdAt;
    /**
     * Unique id of the transfer strategy.
     */
    public string $id;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceWithDefaultOptionApiModel $musicOnHold;
    /**
     * Example: "2023-04-06T11:22:18.149+0000"
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'announcementMessage' => $value instanceof \stdClass ? $this->announcementMessage = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileOrTtsAudioSourceWithRepeatIntervalApiModel($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'musicOnHold' => $value instanceof \stdClass ? $this->musicOnHold = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceWithDefaultOptionApiModel($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
