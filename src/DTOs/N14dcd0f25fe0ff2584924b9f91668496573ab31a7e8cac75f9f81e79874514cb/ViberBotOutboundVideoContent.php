<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotOutboundVideoContent
 */
final class ViberBotOutboundVideoContent extends \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'duration' => [
            'maximum' => 180,
            'format' => 'int32',
        ],
        'size' => [
            'maximum' => 27262976,
            'format' => 'int32',
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 768,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Video duration in seconds; will be displayed to the receiver
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboard $keyboard;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotSenderDisplayInfo $senderDisplayInfo;
    /**
     * Size of the video in bytes
     * Format: int32
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL of a reduced size image
     */
    public string $thumbnailUrl;
    /**
     * URL of the video (MP4, H264)
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'keyboard' => $value instanceof \stdClass ? $this->keyboard = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotKeyboard($value) : parent::assignMember($name, $value),
            'senderDisplayInfo' => $value instanceof \stdClass ? $this->senderDisplayInfo = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotSenderDisplayInfo($value) : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
