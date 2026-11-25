<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderUPIPayUPaymentDetails
 */
final class InteractiveOrderUPIPayUPaymentDetails extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveAllowedOrderPaymentDetails
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'callbackData' => [
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'customerEmail' => [
            'minLength' => 1,
            'maxLength' => 50,
        ],
        'customerFirstName' => [
            'minLength' => 1,
            'maxLength' => 60,
        ],
        'customerLastName' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
        'id' => [
            'minLength' => 1,
            'maxLength' => 25,
        ],
        'productDescription' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * List of custom parameters corresponding to the transaction.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\ResourcesCollection $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * Customer's email.
     * Format: email
     */
    public string $customerEmail {
        set {
            $this->assigning('customerEmail', $value);
            $this->customerEmail = $value;
        }
    }
    /**
     * Customer's first name.
     */
    public string $customerFirstName {
        set {
            $this->assigning('customerFirstName', $value);
            $this->customerFirstName = $value;
        }
    }
    /**
     * Customer's last name.
     */
    public string $customerLastName {
        set {
            $this->assigning('customerLastName', $value);
            $this->customerLastName = $value;
        }
    }
    /**
     * Unique identifier of the payment.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Brief description of products in this order.
     */
    public string $productDescription {
        set {
            $this->assigning('productDescription', $value);
            $this->productDescription = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->callbackData = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\ResourcesCollection($value) : parent::assignMember($name, $value),
            'customerEmail' => is_string($value) ? $this->customerEmail = $value : parent::assignMember($name, $value),
            'customerFirstName' => is_string($value) ? $this->customerFirstName = $value : parent::assignMember($name, $value),
            'customerLastName' => is_string($value) ? $this->customerLastName = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'productDescription' => is_string($value) ? $this->productDescription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
