<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TextContent
 *
 * The content object to build a message that will be sent.
 */
final class TextContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'text',
];

    protected const array VALIDATION = [
    'text' => [
        'minLength' => 1,
        'maxLength' => 4096,
    ],
];

    /**
     * Allows for URL preview from within the message. If set to `true`, the message content must contain a URL starting with `https://` or `http://` and the flag removeProtocol must be set to `false`.
     */
    public bool $previewUrl;
    /**
     * Content of the message being sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'previewUrl' => is_bool($value) ? $this->previewUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
