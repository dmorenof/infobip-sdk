<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661;

/**
 * ReportLineItem
 */
final class ReportLineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date',
    'destination',
    'type',
];

    /**
     * Date in UTC when the activation state change has happened. Format yyyy-MM-dd'T'HH:mm:ss.SSSZ
     * Example: "2024-03-05T11:00:00.000+0000"
     */
    public string $date;
    /**
     * The phone number that changed its activation state
     * Example: "15987654321"
     */
    public string $destination;
    /**
     * Optional information about a new phone number that replaced the original deactivated phone number. <br />Only optionally included in case of DEACTIVATION type of the entry
     * Example: "15123456789"
     */
    public string $newDestination;
    public \InfobipSDK\Enums\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\DeactivationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'newDestination' => is_string($value) ? $this->newDestination = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\DeactivationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
