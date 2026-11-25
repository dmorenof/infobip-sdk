<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * ItemListElement
 *
 * List of 3-5 item list elements. First item title: maximum 25 characters. Remaining items: maximum 30 characters.
 */
final class ItemListElement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'title',
    'url',
    'urlMobile',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 0,
        'maxLength' => 250,
        'pattern' => '',
    ],
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
    public string $schemeIOS;
    /**
     * List item title. Title of the first element must be shorter than 26 characters.Titles of the following elements must be shorter than 31 characters
     */
    public string $title;
    /**
     * URL of an image sent in a Kakao list message. Must be a valid URL starting with `https://` or `http://`. Supported image types are `JPG`, `PNG`. Maximum image size is 5Mb.The image of the first element has a ratio of 2:1, the subsequent ones 1:1
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
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
    public string $urlPC;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIOS' => is_string($value) ? $this->schemeIOS = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPC' => is_string($value) ? $this->urlPC = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
