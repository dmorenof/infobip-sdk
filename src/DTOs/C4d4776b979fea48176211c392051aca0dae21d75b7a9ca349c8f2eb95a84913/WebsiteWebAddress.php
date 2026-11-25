<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * WebsiteWebAddress
 *
 * List of websites associated with the sender and displayed to the user on mobile device. Required if phone and email are not provided. Currently, only one entry is supported.
 */
final class WebsiteWebAddress extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'label',
        'url',
    ];

    protected const array VALIDATION = [
        'label' => [
            'minLength' => 1,
            'maxLength' => 25,
        ],
        'url' => [
            'minLength' => 1,
            'maxLength' => 2048,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    /**
     * Label for the URI. Must be plain text (no URLs, HTML or markup).
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * A publicly accessible URI associated with the sender. Must use the HTTP or HTTPS protocol. Maximum URL length is 2048 characters.
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
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
