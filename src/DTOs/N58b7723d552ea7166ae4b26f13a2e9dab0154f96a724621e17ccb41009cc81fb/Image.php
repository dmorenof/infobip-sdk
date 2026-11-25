<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

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
            'maxLength' => 500,
        ],
        'url' => [
            'minLength' => 0,
            'maxLength' => 500,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    /**
     * URL to redirect to when clicking on the image in the template.
     */
    public string $link {
        set {
            $this->assigning('link', $value);
            $this->link = $value;
        }
    }
    /**
     * URL of an image sent in a template registered with the image upload API.
     * Supported image types are `JPG`, `PNG`.
     *
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
