<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * ShortDescriptionCoupon
 *
 * Coupon for free form content with short description (12 character limit).
 */
final class ShortDescriptionCoupon extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'description',
    'title',
    'urlMobile',
];

    protected const array VALIDATION = [
    'description' => [
        'minLength' => 1,
        'maxLength' => 12,
    ],
    'urlMobile' => [
        'minLength' => 1,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    /**
     * Coupon content description. Maximum length is 12 characters, minimum length is 1 character.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Custom scheme for users operating in an Android environment.
     */
    public string $schemeAndroid;
    /**
     * Custom scheme for users operating in an iOS environment.
     */
    public string $schemeIOS;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CouponTitleContent $title;
    /**
     * URL to redirect when a user is in a mobile environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlMobile {
        set {
            $this->assigning('urlMobile', $value);
            $this->urlMobile = $value;
        }
    }
    /**
     * URL to redirect when a user is in a PC environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlPC;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIOS' => is_string($value) ? $this->schemeIOS = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPC' => is_string($value) ? $this->urlPC = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
