<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * UrlMediaCarouselCard
 *
 * Carousel cards. Should be defined in the correct order.It can have between two and ten cards.
 */
final class UrlMediaCarouselCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
    'button',
    'header',
];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MediaCarouselCardBody $body;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UrlCardActionButton $button;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MediaCarouselCardHeader $header;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MediaCarouselCardBody($value) : parent::assignMember($name, $value),
            'button' => $value instanceof \stdClass ? $this->button = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UrlCardActionButton($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
