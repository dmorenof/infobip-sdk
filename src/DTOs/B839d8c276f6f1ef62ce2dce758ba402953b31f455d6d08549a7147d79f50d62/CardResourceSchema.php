<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CardResourceSchema
 *
 * Resource object describing the main media of the card.
 */
final class CardResourceSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    /**
     * Specifies the URL of the media resource. For supported file formats and aspect ratios, see documentation:
     *
     * - [Rich Card](https://www.infobip.com/docs/rcs/rcs-message-types-and-templates#message-types-using-rcs-rich-card)
     * - [Carousel](https://www.infobip.com/docs/rcs/rcs-message-types-and-templates#message-types-using-rcs-carousel)
     *
     * Note that support for specific content types may vary depending on the mobile network operator.
     *
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
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
