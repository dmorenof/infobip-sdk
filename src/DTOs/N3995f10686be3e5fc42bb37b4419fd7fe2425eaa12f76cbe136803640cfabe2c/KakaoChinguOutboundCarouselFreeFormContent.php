<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * KakaoChinguOutboundCarouselFreeFormContent
 */
final class KakaoChinguOutboundCarouselFreeFormContent extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'elements' => [
        'minItems' => 2,
        'maxItems' => 6,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     *  List of carousel elements. Minimum 2, maximum 6 elements are required regardless of head presence.
     *
     */
    public \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundCarouselFreeFormContent\ElementsCollection $elements {
        set {
            $this->assigning('elements', $value);
            $this->elements = $value;
        }
    }
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselFreeFormHead $head;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselTail $tail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'elements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->elements = new \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguOutboundCarouselFreeFormContent\ElementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselFreeFormElement::class)) : parent::assignMember($name, $value),
            'head' => $value instanceof \stdClass ? $this->head = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselFreeFormHead($value) : parent::assignMember($name, $value),
            'tail' => $value instanceof \stdClass ? $this->tail = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\CarouselTail($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
