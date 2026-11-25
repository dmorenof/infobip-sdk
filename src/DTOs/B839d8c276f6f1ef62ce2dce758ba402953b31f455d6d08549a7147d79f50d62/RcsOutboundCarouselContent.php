<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsOutboundCarouselContent
 */
final class RcsOutboundCarouselContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'cardWidth',
    'contents',
    'type',
];

    protected const array VALIDATION = [
    'contents' => [
        'minItems' => 2,
        'maxItems' => 10,
    ],
    'suggestions' => [
        'minItems' => 0,
        'maxItems' => 11,
    ],
];

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Width $cardWidth;
    /**
     * An array of cards contained within the carousel.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CarouselRcsApiMtContent\ContentsCollection $contents {
        set {
            $this->assigning('contents', $value);
            $this->contents = $value;
        }
    }
    /**
     * List of suggestions.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardContent\SuggestionsCollection $suggestions {
        set {
            $this->assigning('suggestions', $value);
            $this->suggestions = $value;
        }
    }
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cardWidth' => is_string($value) ? $this->cardWidth = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Width::from($value) : parent::assignMember($name, $value),
            'contents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contents = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CarouselRcsApiMtContent\ContentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardContent::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
