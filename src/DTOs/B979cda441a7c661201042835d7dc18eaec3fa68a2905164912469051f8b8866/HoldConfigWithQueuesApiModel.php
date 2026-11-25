<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * HoldConfigWithQueuesApiModel
 * Example: {"id":"63a99eb0b8863d4d26678000","name":"Hold Config Name","onHoldMusic":{"enabled":true,"useDefault":false,"fileAudioSource":{"fileDescriptor":"eea6b505-6e67-420a-b1a2-2307fafb1124"}},"announcementMessage":{"audioSourceType":"TTS","ttsAudioSource":{"text":"Hello this a text to speech message","language":"English","voice":{"name":"Test","gender":"FEMALE"},"speechRate":1,"fileDescriptor":"eea6b505-6e67-420a-b1a2-2307fafb1125"},"fileAudioSource":{"fileDescriptor":"eea6b505-6e67-420a-b1a2-2307fafb116"},"duration":{"unit":["SECONDS","MINUTES","HOURS"],"value":2}},"default":false,"enabled":true,"queueIds":["FD80A6AA8E0DB8A5165276570943D8CF","A4BBE5D92667EEAB69860D457E877A59"],"createdAt":"2022-12-10T13:45:00.777+0000","updatedAt":"2022-12-10T13:45:00.777+0000"}
 */
final class HoldConfigWithQueuesApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'queueIds',
];

    protected const array PROPERTY_MAP = [
    'default' => 'default_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'default_' => 'default',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 128,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'createdAt',
    'id',
    'updatedAt',
];

    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileOrTtsAudioSourceWithRepeatIntervalApiModel $announcementMessage;
    /**
     * Example: "2022-12-10T13:45:00.777+0000"
     */
    public string $createdAt;
    public bool $default_;
    public bool $enabled;
    /**
     * Unique id of the hold configuration.
     */
    public string $id;
    /**
     * Hold configuration name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceWithDefaultOptionApiModel $onHoldMusic;
    /**
     * Specifies which queues is the given hold config applied to. Empty list is supported for default config.
     */
    public \InfobipSDK\Collections\StringCollection $queueIds;
    /**
     * Example: "2022-12-10T13:45:00.777+0000"
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'announcementMessage' => $value instanceof \stdClass ? $this->announcementMessage = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileOrTtsAudioSourceWithRepeatIntervalApiModel($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'onHoldMusic' => $value instanceof \stdClass ? $this->onHoldMusic = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\FileAudioSourceWithDefaultOptionApiModel($value) : parent::assignMember($name, $value),
            'queueIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->queueIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
