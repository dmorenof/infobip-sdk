<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9;

/**
 * IamPersonContactsV2
 */
final class IamPersonContactsV2 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'appleBusinessChat',
        'facebook',
        'instagram',
        'instagramDm',
        'kakaoSangdam',
        'kakaoTalk',
        'line',
        'liveChat',
        'openChannel',
        'push',
        'telegram',
        'tiktokBm',
        'twitter',
        'viberBots',
        'webpush',
        'whatsapp',
        'zaloFollower',
    ];

    /**
     * A list of person's Apple Business Chat destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $appleBusinessChat;
    /**
     * A list of person's email addresses. Max 100 emails per person.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\EmailCollection $email;
    /**
     * A list of person's Messenger destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $facebook;
    /**
     * A list of person's Instagram destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $instagram;
    /**
     * A list of person's Instagram DM destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $instagramDm;
    /**
     * A list of person's Kakao Sangdam destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $kakaoSangdam;
    /**
     * A list of person's KakaoTalk destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $kakaoTalk;
    /**
     * A list of person's Line destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $line;
    /**
     * A list of person's Live Chat destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $liveChat;
    /**
     * A list of person's Open Channel destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $openChannel;
    /**
     * A list of person's phone numbers. Max 100 numbers per person.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\PhoneCollection $phone;
    /**
     * List of person's push registrations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\PushCollection $push;
    /**
     * A list of person's Telegram destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $telegram;
    /**
     * A list of person's TikTok Business Messaging destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $tiktokBm;
    /**
     * A list of person's Twitter destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $twitter;
    /**
     * A list of person's Viber Bots destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $viberBots;
    /**
     * A list of person's web push registrations
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\WebpushCollection $webpush;
    /**
     * A list of person's WhatsApp destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $whatsapp;
    /**
     * A list of person's Zalo Follower destinations.
     */
    public \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection $zaloFollower;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appleBusinessChat' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->appleBusinessChat = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'email' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->email = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\EmailCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamEmailContactV2::class)) : parent::assignMember($name, $value),
            'facebook' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->facebook = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'instagram' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->instagram = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'instagramDm' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->instagramDm = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'kakaoSangdam' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->kakaoSangdam = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'kakaoTalk' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->kakaoTalk = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'line' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->line = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'liveChat' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->liveChat = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'openChannel' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->openChannel = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'phone' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->phone = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\PhoneCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPhoneContactV2::class)) : parent::assignMember($name, $value),
            'push' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->push = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\PushCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPushContactV2::class)) : parent::assignMember($name, $value),
            'telegram' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->telegram = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'tiktokBm' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tiktokBm = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'twitter' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->twitter = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'viberBots' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->viberBots = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'webpush' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->webpush = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\WebpushCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B19dbfd240ca6293d80ae57437ec266d186a81682210bc56a1b7636c4c62d0e7\CommonPushContact::class)) : parent::assignMember($name, $value),
            'whatsapp' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->whatsapp = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            'zaloFollower' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->zaloFollower = new \InfobipSDK\Collections\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPersonContactsV2\BusinessChatCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
