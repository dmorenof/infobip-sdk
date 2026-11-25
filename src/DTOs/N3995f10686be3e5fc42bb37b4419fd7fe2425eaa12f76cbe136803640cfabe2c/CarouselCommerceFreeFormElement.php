<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * CarouselCommerceFreeFormElement
 *
 *  List of carousel elements. Maximum 6.
 *  If head is present, minimum 1 element is required.
 *  If head is not present, minimum 2 elements are required.
 *
 */
final class CarouselCommerceFreeFormElement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attachment',
    ];

    protected const array VALIDATION = [
        'additionalContent' => [
            'minLength' => 0,
            'maxLength' => 34,
        ],
    ];

    /**
     * Additional content of the carousel commerce list element.
     */
    public string $additionalContent {
        set {
            $this->assigning('additionalContent', $value);
            $this->additionalContent = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselCommerceFreeFormElementAttachment $attachment;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalContent' => is_string($value) ? $this->additionalContent = $value : parent::assignMember($name, $value),
            'attachment' => $value instanceof \stdClass ? $this->attachment = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselCommerceFreeFormElementAttachment($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
