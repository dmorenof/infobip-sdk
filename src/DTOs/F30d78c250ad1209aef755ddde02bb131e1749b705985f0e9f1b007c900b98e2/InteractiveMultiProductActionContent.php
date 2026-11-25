<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveMultiProductActionContent
 *
 * Allows you to specify catalog and product details sent in the multi-product message.
 */
final class InteractiveMultiProductActionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'catalogId',
    'sections',
];

    protected const array VALIDATION = [
    'catalogId' => [
        'minLength' => 1,
    ],
    'sections' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    /**
     * The ID that uniquely identifies the [catalog](https://www.infobip.com/docs/whatsapp/manage-integration#enable-meta-catalog-for-product-based-messaging) registered with Facebook and connected to the WhatsApp Business Account the sender belongs to.
     */
    public string $catalogId {
        set {
            $this->assigning('catalogId', $value);
            $this->catalogId = $value;
        }
    }
    /**
     * An array of multi product sections.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveMultiProductActionContent\SectionsCollection $sections {
        set {
            $this->assigning('sections', $value);
            $this->sections = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'catalogId' => is_string($value) ? $this->catalogId = $value : parent::assignMember($name, $value),
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveMultiProductActionContent\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveMultiProductSectionContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
