<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Webhook
 *
 * Webhook configuration.
 */
final class Webhook extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'notifyUrl',
    ];

    protected const array VALIDATION = [
        'contentType' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'notifyUrl' => [
            'minLength' => 0,
            'maxLength' => 512,
        ],
    ];

    public string $contentType {
        set {
            $this->assigning('contentType', $value);
            $this->contentType = $value;
        }
    }
    /**
     * Your webhook URL, where the notifications will be sent to.
     */
    public string $notifyUrl {
        set {
            $this->assigning('notifyUrl', $value);
            $this->notifyUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
