<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageCarouselCard
 *
 * Carousel cards.
 */
final class MessagesApiMessageCarouselCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
];

    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCarouselCardBody $body;
    /**
     * List of buttons of a card.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCarouselCard\ButtonsCollection $buttons;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCarouselCardBody($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
