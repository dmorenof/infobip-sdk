<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsActionContent
 *
 * Allows you to specify order details.
 */
final class InteractiveOrderDetailsActionContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'order',
        'orderCurrency',
        'orderType',
        'payment',
        'totalAmount',
    ];

    protected const array VALIDATION = [
        'paymentConfiguration' => [
            'minLength' => 1,
            'maxLength' => 60,
        ],
    ];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrder $order;
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\OrderCurrency $orderCurrency;
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\OrderType $orderType;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveAllowedOrderPaymentDetails $payment;
    /**
     * Name of the WhatsApp payment configuration to be used for this order. Can be omitted for Brazil PIX, UPI Link and must be omitted for Brazil link, Brazil Boleto, Brazil Payments and UPI Intent payment.
     */
    public string $paymentConfiguration {
        set {
            $this->assigning('paymentConfiguration', $value);
            $this->paymentConfiguration = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount $totalAmount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'order' => $value instanceof \stdClass ? $this->order = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsOrder($value) : parent::assignMember($name, $value),
            'orderCurrency' => is_string($value) ? $this->orderCurrency = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\OrderCurrency::from($value) : parent::assignMember($name, $value),
            'orderType' => is_string($value) ? $this->orderType = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\OrderType::from($value) : parent::assignMember($name, $value),
            'paymentConfiguration' => is_string($value) ? $this->paymentConfiguration = $value : parent::assignMember($name, $value),
            'totalAmount' => $value instanceof \stdClass ? $this->totalAmount = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsAmount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
