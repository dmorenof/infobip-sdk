<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderPaymentStatus
 *
 * Payment of the order.
 */
class InteractiveOrderPaymentStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'BRAZIL' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilPaymentStatus',
        'BRAZIL_BOLETO' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilBoletoPaymentStatus',
        'BRAZIL_LINK' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilLinkPaymentStatus',
        'BRAZIL_PIX_DC' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilPixDcPaymentStatus',
        'PG_PAYU' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIPGPayUPaymentStatus',
        'PG_RAZORPAY' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIPGRazorpayPaymentStatus',
        'UPI_INTENT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIIntentPaymentStatus',
        'UPI_LINK' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPILinkPaymentStatus',
        'UPI_PAYU' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIPayUPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderBrazilBoletoPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilBoletoPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderBrazilLinkPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilLinkPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderBrazilPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderBrazilPixDcPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderBrazilPixDcPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderUPIIntentPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIIntentPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderUPILinkPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPILinkPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderUPIPGPayUPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIPGPayUPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderUPIPGRazorpayPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIPGRazorpayPaymentStatus',
        'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveOrderUPIPayUPaymentStatus' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveOrderUPIPayUPaymentStatus',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
