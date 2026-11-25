<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * ReferredProduct
 *
 * Product information included in the incoming message.
 */
final class ReferredProduct extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'catalogId',
        'productRetailerId',
    ];

    protected const array VALIDATION = [
        'catalogId' => [
            'minLength' => 1,
        ],
        'productRetailerId' => [
            'minLength' => 1,
        ],
    ];

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
     * Product unique identifier, as defined in catalog.
     */
    public string $productRetailerId {
        set {
            $this->assigning('productRetailerId', $value);
            $this->productRetailerId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'catalogId' => is_string($value) ? $this->catalogId = $value : parent::assignMember($name, $value),
            'productRetailerId' => is_string($value) ? $this->productRetailerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
