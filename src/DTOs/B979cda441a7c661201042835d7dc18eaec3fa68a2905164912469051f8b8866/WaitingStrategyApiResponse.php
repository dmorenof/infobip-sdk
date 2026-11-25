<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * WaitingStrategyApiResponse
 */
final class WaitingStrategyApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithPeriodicCollectApiModel $announcementMessage;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel $callbackConfirmationMessage;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\Condition $condition;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\ConditionType $conditionType;
    /**
     * Time at which the waiting strategy was created.
     * Format: date-time
     */
    public string $createdAt;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel $greetingMessage;
    /**
     * Unique id of the waiting strategy.
     */
    public string $id;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\DurationApiModel $maximumWaitTime;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel $maximumWaitTimeMessage;
    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileAudioSourceApiModel $musicOnHold;
    /**
     * Waiting strategy name.
     */
    public string $name;
    /**
     * Time stamp when waiting strategy is updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'announcementMessage' => $value instanceof \stdClass ? $this->announcementMessage = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithPeriodicCollectApiModel($value) : parent::assignMember($name, $value),
            'callbackConfirmationMessage' => $value instanceof \stdClass ? $this->callbackConfirmationMessage = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel($value) : parent::assignMember($name, $value),
            'conditionType' => is_string($value) ? $this->conditionType = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\ConditionType::from($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'greetingMessage' => $value instanceof \stdClass ? $this->greetingMessage = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'maximumWaitTime' => $value instanceof \stdClass ? $this->maximumWaitTime = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\DurationApiModel($value) : parent::assignMember($name, $value),
            'maximumWaitTimeMessage' => $value instanceof \stdClass ? $this->maximumWaitTimeMessage = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileOrTtsAudioSourceApiModel($value) : parent::assignMember($name, $value),
            'musicOnHold' => $value instanceof \stdClass ? $this->musicOnHold = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\OptionWithFileAudioSourceApiModel($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
