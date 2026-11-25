<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMoEventPaymentItem
 *
 * Items information included in the incoming message.
 */
final class MessagesApiMoEventPaymentItem extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (Apple specific) The monetary amount of the item.
     */
    public float $amount;
    /**
     * (WhatsApp specific) The ID that uniquely identifies the catalog registered with Facebook, connected to the WhatsApp Business Account (WABA) the sender belongs to.
     */
    public string $catalogId;
    /**
     * (Apple specific) A short, localized description of the item.
     */
    public string $name;
    /**
     * (WhatsApp specific) Product unique identifier, as defined in catalog.
     */
    public string $retailerId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'catalogId' => is_string($value) ? $this->catalogId = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'retailerId' => is_string($value) ? $this->retailerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
