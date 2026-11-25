<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * Destination
 *
 * An array of destination objects for where messages are being sent. A valid destination is required.
 */
final class Destination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'to',
];

    protected const array VALIDATION = [
    'to' => [
        'minLength' => 0,
        'maxLength' => 64,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'messageId',
    'to',
];

    /**
     * The ID that uniquely identifies the message sent. Anything above 200 characters passed in the request will be clipped during processing and returned in response, reports and logs.
     */
    public string $messageId;
    /**
     * Message destination address. Addresses must be in international format (Example: `41793026727`).
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
