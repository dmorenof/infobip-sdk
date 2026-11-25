<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * ApplicationDestination
 */
final class ApplicationDestination extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Destination
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'priority' => [
            'minimum' => 1,
            'maximum' => 100,
            'format' => 'int32',
        ],
        'weight' => [
            'minimum' => 1,
            'maximum' => 100,
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Sets specific delivery windows outside of which calls won't be forwarded to the destination. If defined, call forwarding is allowed only if any time window in array is satisfied.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\ApplicationDestination\TimeWindowsCollection $allowedTimeWindows;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Application $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowedTimeWindows' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->allowedTimeWindows = new \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\ApplicationDestination\TimeWindowsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AllowedTimeWindow::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
