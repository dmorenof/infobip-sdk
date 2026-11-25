<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveUrlButtonActionContent
 *
 * Allows you to specify the content of the button and its URL.
 */
final class InteractiveUrlButtonActionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'displayText',
        'url',
    ];

    protected const array VALIDATION = [
        'displayText' => [
            'minLength' => 1,
            'maxLength' => 20,
        ],
        'url' => [
            'minLength' => 1,
            'maxLength' => 2048,
            'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
        ],
    ];

    /**
     * Content of the button.
     */
    public string $displayText {
        set {
            $this->assigning('displayText', $value);
            $this->displayText = $value;
        }
    }
    /**
     * URL to load in the device's default web browser when tapped by the WhatsApp user.
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
            'displayText' => is_string($value) ? $this->displayText = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
