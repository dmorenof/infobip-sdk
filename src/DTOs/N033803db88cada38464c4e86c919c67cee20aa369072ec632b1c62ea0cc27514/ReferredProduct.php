<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N033803db88cada38464c4e86c919c67cee20aa369072ec632b1c62ea0cc27514;

/**
 * ReferredProduct
 *
 * Product information included in the incoming message.
 */
final class ReferredProduct extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'catalogId' => [
        'minLength' => 0,
    ],
    'productRetailerId' => [
        'minLength' => 0,
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
