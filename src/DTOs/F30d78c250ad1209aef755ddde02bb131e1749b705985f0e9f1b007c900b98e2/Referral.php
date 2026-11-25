<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * Referral
 *
 * Information about the referral which is either a Facebook ad or a post that triggered the message.
 */
final class Referral extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sourceType',
        'sourceUrl',
    ];

    protected const array VALIDATION = [
        'sourceUrl' => [
            'minLength' => 1,
        ],
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
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\ReferralMedia $referralMedia;
    /**
     * Facebook ID of an ad or a post.
     */
    public string $sourceId;
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\ReferralSourceType $sourceType;
    /**
     * The URL that leads to a Facebook ad or a post.
     */
    public string $sourceUrl {
        set {
            $this->assigning('sourceUrl', $value);
            $this->sourceUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'ctwaClickId' => is_string($value) ? $this->ctwaClickId = $value : parent::assignMember($name, $value),
            'headline' => is_string($value) ? $this->headline = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            'sourceType' => is_string($value) ? $this->sourceType = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\ReferralSourceType::from($value) : parent::assignMember($name, $value),
            'sourceUrl' => is_string($value) ? $this->sourceUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
