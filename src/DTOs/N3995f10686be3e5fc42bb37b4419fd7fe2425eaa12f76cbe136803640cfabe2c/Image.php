<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * Image
 *
 * Image content.
 */
final class Image extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array VALIDATION = [
    'link' => [
        'minLength' => 0,
        'maxLength' => 250,
    ],
    'url' => [
        'minLength' => 0,
        'maxLength' => 250,
        'pattern' => '',
    ],
];

    /**
     * URL to redirect to when clicking on the image in the message.
     */
    public string $link {
        set {
            $this->assigning('link', $value);
            $this->link = $value;
        }
    }
    /**
     * URL of an image sent in a Kakao message. Must be a valid URL starting with `https://` or `http://`. Supported image types are `JPG`, `PNG`. Maximum image size is 500KB with 400 characters in text or 2MB with 76 characters in text.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'link' => is_string($value) ? $this->link = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
