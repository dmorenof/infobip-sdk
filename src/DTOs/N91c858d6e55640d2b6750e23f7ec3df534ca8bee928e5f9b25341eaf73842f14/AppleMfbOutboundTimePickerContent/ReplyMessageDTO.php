<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundTimePickerContent;

/**
 * Object describing reply message bubble presented in Messages app.
 */
final class ReplyMessageDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'title',
];

    protected const array VALIDATION = [
    'subtitle' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * Identifier of the message's image.
     */
    public string $imageIdentifier;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\InteractiveDataMessageStyle $style;
    /**
     * Subtitle of the message.
     */
    public string $subtitle {
        set {
            $this->assigning('subtitle', $value);
            $this->subtitle = $value;
        }
    }
    /**
     * Title of the message.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageIdentifier' => is_string($value) ? $this->imageIdentifier = $value : parent::assignMember($name, $value),
            'style' => is_string($value) ? $this->style = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\InteractiveDataMessageStyle::from($value) : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
