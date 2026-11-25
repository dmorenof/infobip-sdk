<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * CardApiData
 *
 * List of cards.
 */
final class CardApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
    'buttons',
    'header',
];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 1,
        'maxItems' => 2,
    ],
];

    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\BodyApiData $body;
    /**
     * Card buttons. Can contain 1 to 2 buttons.
     */
    public \InfobipSDK\Collections\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CardApiData\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\HeaderApiData $header;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\BodyApiData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
