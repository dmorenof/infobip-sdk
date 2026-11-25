<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotUser
 */
final class ViberBotUser extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The maximal Viber version that is supported by all of the user’s devices
     */
    public string $apiVersion;
    /**
     * URL of user’s avatar
     */
    public string $avatar;
    /**
     * User’s 2 letter country code
     */
    public string $country;
    /**
     * Unique Viber user id
     */
    public string $id;
    /**
     * User’s phone language. Will be returned according to the device language
     */
    public string $language;
    /**
     * User’s Viber name
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiVersion' => is_string($value) ? $this->apiVersion = $value : parent::assignMember($name, $value),
            'avatar' => is_string($value) ? $this->avatar = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
