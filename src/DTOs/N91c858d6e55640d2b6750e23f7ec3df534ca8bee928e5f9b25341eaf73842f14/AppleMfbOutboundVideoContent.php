<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundVideoContent
 */
final class AppleMfbOutboundVideoContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'caption' => [
        'minLength' => 0,
        'maxLength' => 3500,
    ],
    'header' => [
        'minLength' => 0,
        'maxLength' => 3500,
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => '',
    ],
];

    /**
     * Text that will displayed under the video.
     */
    public string $caption {
        set {
            $this->assigning('caption', $value);
            $this->caption = $value;
        }
    }
    /**
     * Text that will displayed above the video.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType $type;
    /**
     * URL of the video being sent.
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
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
