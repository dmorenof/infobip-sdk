<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushDestinationMultiple
 *
 * Multiple Recipient Destinations [more](https://www.infobip.com/docs/mobile-push/mobile-push-over-api#push-over-api-multiple-persons-using-or)
 */
final class PushDestinationMultiple extends \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestination
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array PROPERTY_MAP = [
    '$and' => 'And_',
    '$or' => 'Or_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'And_' => '$and',
    'Or_' => '$or',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Segment recipients by including different filters by `and` operator, over multiple destination address types. Learn more about [custom attributes](https://www.infobip.com/docs/mobile-push/mobile-push-over-api#push-over-api-multiple-persons-device-attributes)
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestinationMultiple\AndCollection $And_;
    /**
     * Segment recipients by including different filters by `or` operator, over multiple destination address types. Learn more about [custom attributes](https://www.infobip.com/docs/mobile-push/mobile-push-over-api#push-over-api-multiple-persons-device-attributes)
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestinationMultiple\OrCollection $Or_;
    /**
     * Set to true to only send messages to push devices which are marked as primary devices. By default, messages will be sent to all targeted devices, including both primary and non-primary.
     */
    public bool $targetOnlyPrimaryDevices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'targetOnlyPrimaryDevices' => is_bool($value) ? $this->targetOnlyPrimaryDevices = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
