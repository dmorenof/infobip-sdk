<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * WebFormApiResponse
 * Example: {"id":"7646c2ff-916d-46f1-9c53-5273476ed505","name":"Test WebForm","channel":"EMAIL","destination":"destination&#64;email.test","url":"/ccaas/1/web-forms/7646c2ff-916d-46f1-9c53-5273476ed505/post","enabled":true,"createdAt":"2023-11-01T00:00:00.000+00:00","updatedAt":"2023-11-01T00:00:00.000+00:00","tagIds":["2423d4c7-23da-422a-9f15-ca08006051ea","2664c7c3-f546-4073-a961-b94aed465ee8"]}
 */
final class WebFormApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationChannel $channel;
    /**
     * Time stamp when Web Form is created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Web Form destination.
     */
    public string $destination;
    /**
     * Web Form enable/disable toggle.
     */
    public bool $enabled;
    /**
     * Web Form Id.
     */
    public string $id;
    /**
     * Web Form name.
     */
    public string $name;
    /**
     * List of tag Ids used on the Web Form.
     */
    public \InfobipSDK\Collections\StringCollection $tagIds;
    /**
     * Time stamp when Web Form was updated.
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Web Form URL.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationChannel::from($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'tagIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tagIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
