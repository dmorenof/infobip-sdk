<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberOutboundVideoContent
 */
final class ViberOutboundVideoContent extends \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'buttonTitle' => [
            'minLength' => 1,
            'maxLength' => 30,
        ],
        'mediaUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
            'pattern' => '',
        ],
        'text' => [
            'minLength' => 1,
            'maxLength' => 1000,
        ],
        'thumbnailUrl' => [
            'minLength' => 0,
            'maxLength' => 1000,
            'pattern' => '',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ButtonWithOptionalAction $button;
    /**
     * Button title.
     *
     * @deprecated
     */
    public string $buttonTitle {
        set {
            $this->assigning('buttonTitle', $value);
            $this->buttonTitle = $value;
        }
    }
    /**
     * How long is the video. It has to be in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601#Durations).
     * Format: duration
     */
    public string $mediaDuration;
    /**
     * URL of the video being sent. Must be a valid URL starting with https:// or http://. The resource must allow HEAD request with 'Content-Length' header. Supported video types are .3gp, .m4v, .mov, .mp4. Maximum video size is 200 MB.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }
    /**
     * Text to be displayed alongside the video.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL of the thumbnail being sent. Must be a valid URL starting with https:// or http://. Supported thumbnail types are .jpg, .jpeg, .png. Recommended resolution: 800 px x 800 px.
     */
    public string $thumbnailUrl {
        set {
            $this->assigning('thumbnailUrl', $value);
            $this->thumbnailUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'button' => $value instanceof \stdClass ? $this->button = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ButtonWithOptionalAction($value) : parent::assignMember($name, $value),
            'buttonTitle' => is_string($value) ? $this->buttonTitle = $value : parent::assignMember($name, $value),
            'mediaDuration' => is_string($value) ? $this->mediaDuration = $value : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
