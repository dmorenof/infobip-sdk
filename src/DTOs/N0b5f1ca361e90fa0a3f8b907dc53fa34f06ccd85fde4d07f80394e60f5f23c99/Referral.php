<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Referral
 *
 * Information about the referral which is either a Facebook ad or a post that triggered the message.
 */
final class Referral extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'body',
        'ctwaClickId',
        'headline',
        'sourceId',
        'sourceType',
        'sourceUrl',
    ];

    /**
     * Body from the ad that generated the message.
     */
    public string $body;
    /**
     * Unique per click identifier exposed when the end user entering the conversation originated from a Click to WhatsApp (CTWA) ad.
     */
    public string $ctwaClickId;
    /**
     * Headline used in the ad that generated the message.
     */
    public string $headline;
    public \InfobipSDK\DTOs\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\AnyOfReferralMedia $referralMedia;
    /**
     * Facebook ID of an ad or a post.
     */
    public string $sourceId;
    /**
     * Indicates the source of the referral. Takes the value of `UNKNOWN` if there's no value or the value is different from `AD` or `POST`.
     */
    public \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Referral\SourceTypeEnum $sourceType;
    /**
     * The URL that leads to a Facebook ad or a post.
     */
    public string $sourceUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'ctwaClickId' => is_string($value) ? $this->ctwaClickId = $value : parent::assignMember($name, $value),
            'headline' => is_string($value) ? $this->headline = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            'sourceType' => is_string($value) ? $this->sourceType = \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Referral\SourceTypeEnum::from($value) : parent::assignMember($name, $value),
            'sourceUrl' => is_string($value) ? $this->sourceUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
