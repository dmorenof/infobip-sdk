<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * WhatsAppInboundContactsContent
 */
final class WhatsAppInboundContactsContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppInboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'contacts' => [
        'minItems' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * An array of contacts sent in a WhatsApp message.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppInboundContactsContent\ContactsCollection $contacts {
        set {
            $this->assigning('contacts', $value);
            $this->contacts = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Context $context;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Referral $referral;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contacts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contacts = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\WhatsAppInboundContactsContent\ContactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InboundContact::class)) : parent::assignMember($name, $value),
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Context($value) : parent::assignMember($name, $value),
            'referral' => $value instanceof \stdClass ? $this->referral = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Referral($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
