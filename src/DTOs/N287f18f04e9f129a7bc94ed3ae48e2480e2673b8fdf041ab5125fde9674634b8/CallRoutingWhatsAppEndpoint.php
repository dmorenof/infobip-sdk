<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CallRoutingWhatsAppEndpoint
 */
final class CallRoutingWhatsAppEndpoint extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Endpoint
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Business-Scoped User ID. Used for outbound call initiation when the callee's phone number is not provided.
     */
    public string $bsuid;
    /**
     * Caller's WhatsApp username. Populated on inbound calls for caller identification.
     */
    public string $displayName;
    /**
     * WhatsApp registered phone number. Defaults to `from` value used in inbound call.
     */
    public string $from;
    /**
     * Phone number in the [E.164](https://en.wikipedia.org/wiki/E.164) format. Defaults to `to` value used in inbound call.
     */
    public string $phoneNumber;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RingbackGeneration $ringbackGeneration;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bsuid' => is_string($value) ? $this->bsuid = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'ringbackGeneration' => $value instanceof \stdClass ? $this->ringbackGeneration = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RingbackGeneration($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
