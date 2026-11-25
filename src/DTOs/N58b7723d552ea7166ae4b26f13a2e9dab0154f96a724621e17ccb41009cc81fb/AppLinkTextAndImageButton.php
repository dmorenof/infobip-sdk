<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * AppLinkTextAndImageButton
 *
 * 2 of schemeAndroid, schemeIos, urlMobile are required.
 */
final class AppLinkTextAndImageButton extends \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\TextAndImageButton
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 14,
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
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Template button name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Android custom scheme when the user is using Android.
     */
    public string $schemeAndroid {
        set {
            $this->assigning('schemeAndroid', $value);
            $this->schemeAndroid = $value;
        }
    }
    /**
     * iOS custom scheme when the user is using iOS.
     */
    public string $schemeIos {
        set {
            $this->assigning('schemeIos', $value);
            $this->schemeIos = $value;
        }
    }
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
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
