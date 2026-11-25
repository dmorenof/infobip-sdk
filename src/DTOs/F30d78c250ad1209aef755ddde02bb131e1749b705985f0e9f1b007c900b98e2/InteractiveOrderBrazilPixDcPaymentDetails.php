<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderBrazilPixDcPaymentDetails
 */
final class InteractiveOrderBrazilPixDcPaymentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'code' => [
            'minLength' => 1,
        ],
        'id' => [
            'pattern' => '[A-Za-z0-9\\-_.]{1,35}',
        ],
        'key' => [
            'minLength' => 1,
        ],
        'merchantName' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Dynamic Pix code which will be copied by the buyer.
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\PixFlowType $flowType;
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
     * Key to identify the pix user’s account.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\PixKeyType $keyType;
    /**
     * Pix account holder name.
     */
    public string $merchantName {
        set {
            $this->assigning('merchantName', $value);
            $this->merchantName = $value;
        }
    }
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'flowType' => is_string($value) ? $this->flowType = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\PixFlowType::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'keyType' => is_string($value) ? $this->keyType = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\PixKeyType::from($value) : parent::assignMember($name, $value),
            'merchantName' => is_string($value) ? $this->merchantName = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
