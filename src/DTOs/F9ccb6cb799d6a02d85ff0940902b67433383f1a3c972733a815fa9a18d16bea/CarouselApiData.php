<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * CarouselApiData
 *
 * Template carousel. Applicable only for MARKETING category.
 */
final class CarouselApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cards',
    ];

    protected const array VALIDATION = [
        'cards' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * List of cards.
     */
    public \InfobipSDK\Collections\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CarouselApiData\CardsCollection $cards {
        set {
            $this->assigning('cards', $value);
            $this->cards = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cards' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cards = new \InfobipSDK\Collections\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CarouselApiData\CardsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CardApiData::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
