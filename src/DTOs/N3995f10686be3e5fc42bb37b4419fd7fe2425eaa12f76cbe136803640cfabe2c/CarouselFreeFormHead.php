<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CarouselFreeFormHead
 *
 * Head of the carousel free form.
 */
final class CarouselFreeFormHead extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'header',
    'image',
];

    protected const array VALIDATION = [
    'content' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'header' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
];

    /**
     * Content of the carousel free form head.
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    /**
     * Header of the carousel free form head.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\Image $image;
    /**
     * Custom scheme for users operating in an Android environment.
     */
    public string $schemeAndroid;
    /**
     * Custom scheme for users operating in an iOS environment.
     */
    public string $schemeIos;
    /**
     * URL to redirect when a user is in a mobile environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlMobile;
    /**
     * URL to redirect when a user is in a PC environment. Must be a valid URL starting with `https://` or `http://`.
     */
    public string $urlPc;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'image' => $value instanceof \stdClass ? $this->image = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\Image($value) : parent::assignMember($name, $value),
            'schemeAndroid' => is_string($value) ? $this->schemeAndroid = $value : parent::assignMember($name, $value),
            'schemeIos' => is_string($value) ? $this->schemeIos = $value : parent::assignMember($name, $value),
            'urlMobile' => is_string($value) ? $this->urlMobile = $value : parent::assignMember($name, $value),
            'urlPc' => is_string($value) ? $this->urlPc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
