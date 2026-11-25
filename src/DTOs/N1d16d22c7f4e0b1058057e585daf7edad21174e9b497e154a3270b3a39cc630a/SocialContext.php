<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * SocialContext
 *
 * Available only for the `INBOUND_MESSAGE` event type. Contains social media context for [Facebook Posts](https://www.infobip.com/docs/social-media/facebook-posts) and [Instagram Posts](https://www.infobip.com/docs/social-media/instagram-posts).
 */
final class SocialContext extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Social media username.
     * Example: "test_acc"
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
