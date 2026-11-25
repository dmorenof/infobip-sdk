<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateCarouselContent
 */
final class RcsTemplateCarouselContent extends \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'contents' => [
        'minItems' => 2,
        'maxItems' => 10,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Width $cardWidth;
    /**
     * An array of cards contained within the carousel.
     */
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateCarouselContent\ContentsCollection $contents {
        set {
            $this->assigning('contents', $value);
            $this->contents = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cardWidth' => is_string($value) ? $this->cardWidth = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\Width::from($value) : parent::assignMember($name, $value),
            'contents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contents = new \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateCarouselContent\ContentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateInnerCardContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
