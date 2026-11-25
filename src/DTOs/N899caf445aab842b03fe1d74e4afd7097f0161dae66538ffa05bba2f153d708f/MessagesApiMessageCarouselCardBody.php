<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageCarouselCardBody
 *
 * Body of a card.
 */
final class MessagesApiMessageCarouselCardBody extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'thumbnailUrl' => [
        'pattern' => '',
    ],
    'url' => [
        'pattern' => '',
    ],
];

    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptions $cardOptions;
    /**
     * Indicates if provided `url` is a video.
     */
    public bool $isVideo;
    /**
     * Text to be sent.
     */
    public string $text;
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
     * Title of the card.
     */
    public string $title;
    /**
     * URL of the card's media. It can be image or video. When you provide it with `isVideo=true` then it will be mapped as a video, otherwise - as an image.
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
            'cardOptions' => $value instanceof \stdClass ? $this->cardOptions = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptions($value) : parent::assignMember($name, $value),
            'isVideo' => is_bool($value) ? $this->isVideo = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
