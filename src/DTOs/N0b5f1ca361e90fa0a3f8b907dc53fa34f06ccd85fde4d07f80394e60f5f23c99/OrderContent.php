<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * OrderContent
 */
final class OrderContent extends \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\InboundMessage
{
    public const array REQUIRED_FIELDS = [
        'catalogId',
        'productItems',
    ];

    protected const array VALIDATION = [
        'catalogId' => [
            'minLength' => 0,
        ],
        'productItems' => [
            'minItems' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The ID that uniquely identifies the catalog registered with Facebook, connected to the WhatsApp Business Account (WABA) the sender belongs to.
     */
    public string $catalogId {
        set {
            $this->assigning('catalogId', $value);
            $this->catalogId = $value;
        }
    }
    /**
     * An array of selected products.
     */
    public \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\OrderContent\ProductItemsCollection $productItems {
        set {
            $this->assigning('productItems', $value);
            $this->productItems = $value;
        }
    }
    /**
     * Text sent with order.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'catalogId' => is_string($value) ? $this->catalogId = $value : parent::assignMember($name, $value),
            'productItems' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->productItems = new \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\OrderContent\ProductItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\ProductItem::class)) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
