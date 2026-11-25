<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CarouselTail
 *
 * Optional clickable footer displayed at the end of the carousel.
 */
final class CarouselTail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'urlMobile',
];

    protected const array VALIDATION = [
    'urlMobile' => [
        'minLength' => 1,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    /**
     * Custom scheme when user operates on Android environment.
     */
    public string $schemeAndroid;
    /**
     * Custom scheme when user operates on iOS environment.
     */
    public string $schemeIos;
    /**
     * URL to redirect when user is in mobile environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlMobile {
        set {
            $this->assigning('urlMobile', $value);
            $this->urlMobile = $value;
        }
    }
    /**
     * URL to redirect when user is in PC environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlPc;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
