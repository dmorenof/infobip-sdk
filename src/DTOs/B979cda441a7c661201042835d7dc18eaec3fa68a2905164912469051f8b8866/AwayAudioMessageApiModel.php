<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * AwayAudioMessageApiModel
 * Example: {"id":"id","workingHoursConfigId":"123","audioSource":{"enabled":false,"audioSourceType":"TTS","ttsAudioSource":{"text":"Random message","language":"en","voice":{"name":"Joanna","gender":"female"},"speechRate":1.1},"fileAudioSource":{"fileDescriptor":"file-descriptor-id-example"}},"collectables":[{"code":"1","action":"CALLBACK","value":"62a73f05502423205b2630cc"}],"collectDuration":{"unit":"SECONDS","value":15}}
 */
final class AwayAudioMessageApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'audioSource',
];

    protected const array READ_ONLY_FIELDS = [
    'id',
    'workingHoursConfigId',
];

    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel $audioSource;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\DurationApiModel $collectDuration;
    public \InfobipSDK\Collections\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AwayAudioMessageApiModel\CollectablesCollection $collectables;
    /**
     * Unique ID of the away audio message.
     */
    public string $id;
    /**
     * Id of the working hours configuration.
     */
    public string $workingHoursConfigId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioSource' => $value instanceof \stdClass ? $this->audioSource = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel($value) : parent::assignMember($name, $value),
            'collectDuration' => $value instanceof \stdClass ? $this->collectDuration = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\DurationApiModel($value) : parent::assignMember($name, $value),
            'collectables' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->collectables = new \InfobipSDK\Collections\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AwayAudioMessageApiModel\CollectablesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\CollectableApiModel::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'workingHoursConfigId' => is_string($value) ? $this->workingHoursConfigId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
