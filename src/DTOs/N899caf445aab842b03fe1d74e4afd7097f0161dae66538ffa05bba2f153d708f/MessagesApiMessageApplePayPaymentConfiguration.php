<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageApplePayPaymentConfiguration
 */
final class MessagesApiMessageApplePayPaymentConfiguration extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentConfiguration
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'currencyCode' => [
        'pattern' => '^[A-Z]{3}$',
    ],
    'fallbackUrl' => [
        'pattern' => '',
    ],
    'merchantCountryCode' => [
        'pattern' => '^[A-Z]{2}$',
    ],
    'merchantPaymentGatewayUrl' => [
        'pattern' => '',
    ],
    'orderTrackingUrl' => [
        'pattern' => '',
    ],
    'paymentMethodUpdateUrl' => [
        'pattern' => '',
    ],
    'shippingContactUpdateUrl' => [
        'pattern' => '',
    ],
    'shippingMethodUpdateUrl' => [
        'pattern' => '',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The three-letter ISO 4217 currency code for the payment.
     */
    public string $currencyCode {
        set {
            $this->assigning('currencyCode', $value);
            $this->currencyCode = $value;
        }
    }
    /**
     * A URL that opens in a web browser so the user can complete the purchase if their device is unable to make payments using Apple Pay.
     */
    public string $fallbackUrl {
        set {
            $this->assigning('fallbackUrl', $value);
            $this->fallbackUrl = $value;
        }
    }
    /**
     * An array of payment capabilities supported by the merchant. The array must include 3DS.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageApplePayPaymentConfiguration\MerchantCapabilitiesCollection $merchantCapabilities;
    /**
     * The two-letter ISO 3166 merchant’s country code.
     */
    public string $merchantCountryCode {
        set {
            $this->assigning('merchantCountryCode', $value);
            $this->merchantCountryCode = $value;
        }
    }
    /**
     * The merchant's display name.
     */
    public string $merchantDisplayName;
    /**
     * The domain of the merchant's website.
     */
    public string $merchantDomain;
    /**
     * The URL of the merchant's payment gateway. This is the URL that Apple Pay uses to process payments.
     */
    public string $merchantPaymentGatewayUrl {
        set {
            $this->assigning('merchantPaymentGatewayUrl', $value);
            $this->merchantPaymentGatewayUrl = $value;
        }
    }
    /**
     * Called by Apple Pay after completing the order provides you with an opportunity to update the order information in your system.
     */
    public string $orderTrackingUrl {
        set {
            $this->assigning('orderTrackingUrl', $value);
            $this->orderTrackingUrl = $value;
        }
    }
    /**
     * Called by Apple Pay when the user changes the payment method.
     */
    public string $paymentMethodUpdateUrl {
        set {
            $this->assigning('paymentMethodUpdateUrl', $value);
            $this->paymentMethodUpdateUrl = $value;
        }
    }
    /**
     * The list of the customer's required billing information needed to process the transaction.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageApplePayPaymentConfiguration\BillingFieldsCollection $requiredBillingFields;
    /**
     * The list of shipping or contact information required from the customer to fulfill the order.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageApplePayPaymentConfiguration\BillingFieldsCollection $requiredShippingFields;
    /**
     * Called by Apple Pay when the user changes their shipping address information.
     */
    public string $shippingContactUpdateUrl {
        set {
            $this->assigning('shippingContactUpdateUrl', $value);
            $this->shippingContactUpdateUrl = $value;
        }
    }
    /**
     * Called by Apple Pay when the user changes the shipping method.
     */
    public string $shippingMethodUpdateUrl {
        set {
            $this->assigning('shippingMethodUpdateUrl', $value);
            $this->shippingMethodUpdateUrl = $value;
        }
    }
    /**
     * An array of payment networks supported by the merchant. The array must include one or more of the following values: AMEX, DISCOVER, MASTERCARD, PRIVATE_LABEL or VISA.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageApplePayPaymentConfiguration\SupportedNetworksCollection $supportedNetworks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currencyCode' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'fallbackUrl' => is_string($value) ? $this->fallbackUrl = $value : parent::assignMember($name, $value),
            'merchantCountryCode' => is_string($value) ? $this->merchantCountryCode = $value : parent::assignMember($name, $value),
            'merchantDisplayName' => is_string($value) ? $this->merchantDisplayName = $value : parent::assignMember($name, $value),
            'merchantDomain' => is_string($value) ? $this->merchantDomain = $value : parent::assignMember($name, $value),
            'merchantPaymentGatewayUrl' => is_string($value) ? $this->merchantPaymentGatewayUrl = $value : parent::assignMember($name, $value),
            'orderTrackingUrl' => is_string($value) ? $this->orderTrackingUrl = $value : parent::assignMember($name, $value),
            'paymentMethodUpdateUrl' => is_string($value) ? $this->paymentMethodUpdateUrl = $value : parent::assignMember($name, $value),
            'shippingContactUpdateUrl' => is_string($value) ? $this->shippingContactUpdateUrl = $value : parent::assignMember($name, $value),
            'shippingMethodUpdateUrl' => is_string($value) ? $this->shippingMethodUpdateUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
