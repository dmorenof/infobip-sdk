<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CarouselCommerceHead
 *
 * Optional carousel head with title and description.
 */
final class CarouselCommerceHead extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'header',
];

    protected const array VALIDATION = [
    'content' => [
        'minLength' => 1,
    ],
    'header' => [
        'minLength' => 1,
    ],
];

    /**
     * Content of the carousel commerce head.
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    /**
     * Header of the carousel commerce.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    /**
     * URL of the image visible in head.
     */
    public string $imageUrl;
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
    public string $urlMobile;
    /**
     * URL to redirect when user is in PC environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlPc;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
