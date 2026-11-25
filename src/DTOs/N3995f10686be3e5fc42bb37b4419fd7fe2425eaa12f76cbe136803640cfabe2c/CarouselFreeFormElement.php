<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CarouselFreeFormElement
 *
 * Carousel free form element with header, message, and attachment content.
 */
final class CarouselFreeFormElement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'attachment',
    'header',
    'message',
];

    protected const array VALIDATION = [
    'header' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'message' => [
        'minLength' => 0,
        'maxLength' => 180,
    ],
];

    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselFreeFormElementAttachment $attachment;
    /**
     * Header of the carousel element. Maximum 20 characters.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    /**
     * Message of the carousel element. Maximum 180 characters.
     */
    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachment' => $value instanceof \stdClass ? $this->attachment = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselFreeFormElementAttachment($value) : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
