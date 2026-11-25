<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageRichLinkBody
 */
final class MessagesApiMessageRichLinkBody extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBody
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'redirectUrl' => [
        'minLength' => 1,
        'pattern' => '',
    ],
    'text' => [
        'minLength' => 1,
    ],
    'thumbnailUrl' => [
        'pattern' => '',
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => '',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Button label text.
     */
    public string $buttonText;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptions $cardOptions;
    /**
     * Indicates if provided `url` is a video.
     */
    public bool $isVideo;
    /**
     * URL to be redirected to.
     */
    public string $redirectUrl {
        set {
            $this->assigning('redirectUrl', $value);
            $this->redirectUrl = $value;
        }
    }
    /**
     * Text to be sent.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL of the thumbnail image. If you add this, then we use as thumbnail image for video you provided in `url`. Applicable only when `isVideo=true`.
     */
    public string $thumbnailUrl {
        set {
            $this->assigning('thumbnailUrl', $value);
            $this->thumbnailUrl = $value;
        }
    }
    /**
     * URL of the rich link. It can be image or video. When you provide it with `isVideo=true` then it will be mapped as a video, otherwise - as an image.
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
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'cardOptions' => $value instanceof \stdClass ? $this->cardOptions = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptions($value) : parent::assignMember($name, $value),
            'isVideo' => is_bool($value) ? $this->isVideo = $value : parent::assignMember($name, $value),
            'redirectUrl' => is_string($value) ? $this->redirectUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
