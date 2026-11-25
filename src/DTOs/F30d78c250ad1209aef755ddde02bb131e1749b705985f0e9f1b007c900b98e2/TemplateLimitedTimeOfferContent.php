<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateLimitedTimeOfferContent
 *
 * Template limited-time offer. Should be defined, only if template contains limited-time offer.
 */
final class TemplateLimitedTimeOfferContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'expirationTime',
];

    protected const array VALIDATION = [
    'expirationTime' => [
        'pattern' => '\\d{4}-((0[1,3-9]|1[0-2])-(0[1-9]|[12]\\d|3[01])|02-(0[1-9]|[12]\\d))T([01]\\d|2[0-3]):([0-5]\\d|60):([0-5]\\d|60).\\d{3}(Z|([+-]\\d{2}:?\\d{2}))',
    ],
];

    /**
     * Offer code expiration time. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2030-01-01T10:00:00Z"
     * Format: date-time
     */
    public string $expirationTime {
        set {
            $this->assigning('expirationTime', $value);
            $this->expirationTime = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expirationTime' => is_string($value) ? $this->expirationTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
