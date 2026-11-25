<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * InstagramDmOutboundCarouselContent
 */
final class InstagramDmOutboundCarouselContent extends \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'elements' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmOutboundCarouselContent\ElementsCollection $elements {
        set {
            $this->assigning('elements', $value);
            $this->elements = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'elements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->elements = new \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\InstagramDmOutboundCarouselContent\ElementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\GenericInstagramDmTemplateElement::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
