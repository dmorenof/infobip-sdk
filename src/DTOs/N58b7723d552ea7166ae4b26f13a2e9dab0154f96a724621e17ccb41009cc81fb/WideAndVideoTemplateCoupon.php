<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * WideAndVideoTemplateCoupon
 *
 * Coupon content.
 */
final class WideAndVideoTemplateCoupon extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'title',
        'urlMobile',
    ];

    protected const array VALIDATION = [
        'description' => [
            'minLength' => 1,
            'maxLength' => 18,
        ],
        'schemeAndroid' => [
            'minLength' => 1,
            'maxLength' => 500,
        ],
        'schemeIos' => [
            'minLength' => 1,
            'maxLength' => 500,
        ],
        'urlMobile' => [
            'minLength' => 1,
            'maxLength' => 500,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
        'urlPc' => [
            'minLength' => 1,
            'maxLength' => 500,
        ],
    ];

    /**
     * Coupon content description. Line breaks are not allowed.
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
    public string $schemeAndroid {
        set {
            $this->assigning('schemeAndroid', $value);
            $this->schemeAndroid = $value;
        }
    }
    /**
     * Custom scheme for users operating in an iOS environment.
     */
    public string $schemeIos {
        set {
            $this->assigning('schemeIos', $value);
            $this->schemeIos = $value;
        }
    }
    public \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\CouponTitleContent $title;
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
    public string $urlPc {
        set {
            $this->assigning('urlPc', $value);
            $this->urlPc = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
