<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * MultiProductSectionContent
 *
 * An array of multi product sections.
 */
final class MultiProductSectionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'productRetailerIds',
    'title',
];

    protected const array VALIDATION = [
    'productRetailerIds' => [
        'minItems' => 1,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 24,
    ],
];

    /**
     * An array of product-unique identifiers as defined in the [catalog](https://www.infobip.com/docs/whatsapp/manage-integration#enable-meta-catalog-for-product-based-messaging). If product retailer ID doesn't exist in your catalog, the product won't be displayed.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MultiProductSectionContent\RetailerIdsCollection $productRetailerIds {
        set {
            $this->assigning('productRetailerIds', $value);
            $this->productRetailerIds = $value;
        }
    }
    /**
     * Title of the section.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'productRetailerIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->productRetailerIds = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MultiProductSectionContent\RetailerIdsCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
