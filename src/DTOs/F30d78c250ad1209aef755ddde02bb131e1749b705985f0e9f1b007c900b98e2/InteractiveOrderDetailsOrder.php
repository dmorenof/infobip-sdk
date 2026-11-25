<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsOrder
 *
 * The order details.
 */
final class InteractiveOrderDetailsOrder extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'items',
    'subtotal',
    'tax',
];

    protected const array VALIDATION = [
    'items' => [
        'minItems' => 1,
    ],
];

    /**
     * The ID that uniquely identifies the [catalog](https://www.infobip.com/docs/whatsapp/manage-integration#enable-meta-catalog-for-product-based-messaging) registered with Facebook and connected to the WhatsApp Business Account the sender belongs to.
     */
    public string $catalogId;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDiscount $discount;
    /**
     * An array of items in the order.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrder\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\OrderDetailsType $orderDetailsType;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrderExpiration $orderExpiration;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDescriptiveAmount $shipping;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount $subtotal;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDescriptiveAmount $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'catalogId' => is_string($value) ? $this->catalogId = $value : parent::assignMember($name, $value),
            'discount' => $value instanceof \stdClass ? $this->discount = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDiscount($value) : parent::assignMember($name, $value),
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrder\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrderItem::class)) : parent::assignMember($name, $value),
            'orderDetailsType' => is_string($value) ? $this->orderDetailsType = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\OrderDetailsType::from($value) : parent::assignMember($name, $value),
            'orderExpiration' => $value instanceof \stdClass ? $this->orderExpiration = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrderExpiration($value) : parent::assignMember($name, $value),
            'shipping' => $value instanceof \stdClass ? $this->shipping = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDescriptiveAmount($value) : parent::assignMember($name, $value),
            'subtotal' => $value instanceof \stdClass ? $this->subtotal = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount($value) : parent::assignMember($name, $value),
            'tax' => $value instanceof \stdClass ? $this->tax = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsDescriptiveAmount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
