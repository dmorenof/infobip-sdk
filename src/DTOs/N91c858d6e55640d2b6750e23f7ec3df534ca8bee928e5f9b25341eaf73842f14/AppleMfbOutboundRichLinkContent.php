<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundRichLinkContent
 */
final class AppleMfbOutboundRichLinkContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'imageUrl' => [
        'pattern' => '',
    ],
    'linkTitle' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'linkUrl' => [
        'minLength' => 1,
        'pattern' => '',
    ],
    'videoUrl' => [
        'pattern' => '',
    ],
];

    /**
     * URL of the image. Allowed format is PNG and size must not exceed 200 KB URL. Not applicable to Apple Maps or Apple Music linkUrls.
     */
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    /**
     * Title of the rich link message. Not applicable to Apple Maps or Apple Music linkUrls.
     */
    public string $linkTitle {
        set {
            $this->assigning('linkTitle', $value);
            $this->linkTitle = $value;
        }
    }
    /**
     * URL of the rich link message. If `linkTitle` and `imageUrl` are not provided, it will resolve them from page metadata. Works best if provided page support Open Graph protocol. Must use HTTPS protocol.
     */
    public string $linkUrl {
        set {
            $this->assigning('linkUrl', $value);
            $this->linkUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType $type;
    /**
     * URL of the video. Not applicable to Apple Maps or Apple Music linkUrls. Must use HTTPS protocol.
     */
    public string $videoUrl {
        set {
            $this->assigning('videoUrl', $value);
            $this->videoUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'linkTitle' => is_string($value) ? $this->linkTitle = $value : parent::assignMember($name, $value),
            'linkUrl' => is_string($value) ? $this->linkUrl = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            'videoUrl' => is_string($value) ? $this->videoUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
