<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * WebFormApiRequest
 * Example: {"name":"Test WebForm","channel":"EMAIL","destination":"destination&#64;email.test","url":"/ccaas/1/web-forms/7646c2ff-916d-46f1-9c53-5273476ed505/post","enabled":true}
 */
final class WebFormApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationChannel $channel;
    /**
     * Web Form destination.
     */
    public string $destination;
    /**
     * Web Form enable/disable toggle.
     */
    public bool $enabled;
    /**
     * Web Form name.
     */
    public string $name;
    /**
     * List of tag Ids used on the Web Form.
     */
    public \InfobipSDK\Collections\StringCollection $tagIds;
    /**
     * Web Form URL.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationChannel::from($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'tagIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tagIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
