<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatInboundAudioContent
 */
final class LiveChatInboundAudioContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'caption' => [
            'minLength' => 0,
            'maxLength' => 3000,
        ],
        'fileName' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'url' => [
            'minLength' => 0,
            'maxLength' => 2000,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Media caption.
     */
    public string $caption {
        set {
            $this->assigning('caption', $value);
            $this->caption = $value;
        }
    }
    /**
     * Media file name.
     */
    public string $fileName {
        set {
            $this->assigning('fileName', $value);
            $this->fileName = $value;
        }
    }
    /**
     * Unique media identifier.
     */
    public string $id;
    /**
     * Media download URL.
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
            'caption' => is_string($value) ? $this->caption = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
