<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * RoadsideAssistanceLocationInboundContent
 */
final class RoadsideAssistanceLocationInboundContent extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RoadsideAssistanceInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'messageNumber' => [
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Altitude $altitude;
    /**
     * Number of the message in a conversation.
     * Format: int32
     */
    public int $messageNumber {
        set {
            $this->assigning('messageNumber', $value);
            $this->messageNumber = $value;
        }
    }
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Position $position;
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Radius $radius;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altitude' => $value instanceof \stdClass ? $this->altitude = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Altitude($value) : parent::assignMember($name, $value),
            'messageNumber' => is_int($value) ? $this->messageNumber = $value : parent::assignMember($name, $value),
            'position' => $value instanceof \stdClass ? $this->position = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Position($value) : parent::assignMember($name, $value),
            'radius' => $value instanceof \stdClass ? $this->radius = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Radius($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
