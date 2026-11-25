<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde;

/**
 * RouteResponse
 *
 * Route response object.
 */
final class RouteResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
        'id',
        'name',
        'status',
    ];

    protected const array VALIDATION = [
        'destinations' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
        'name' => [
            'minLength' => 1,
        ],
        'order' => [
            'format' => 'int32',
        ],
    ];

    /**
     * List of criteria that should match route. For a route to match, any criterion should be met.
     */
    public \InfobipSDK\Collections\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteRequest\CriteriaCollection $criteria;
    /**
     * List of destinations. First destination in the list is the first one to be executed. Subsequent destinations are executed only if the previous one fails.
     */
    public \InfobipSDK\Collections\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteRequest\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Unique identifier of a route.
     */
    public string $id;
    /**
     * Route name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Indicates priority index of the route. Routes with lower priority index are executed first.
     * Format: int32
     */
    public int $order {
        set {
            $this->assigning('order', $value);
            $this->order = $value;
        }
    }
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RouteStatus $status;
    /**
     * Indicates whether this route should be used exclusively for call transfers initiated via the REFER SIP message. The `to` number value will be taken from the `Refer-To` header.
     */
    public bool $transferOnly;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'criteria' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->criteria = new \InfobipSDK\Collections\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteRequest\CriteriaCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SearchCriteria::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'order' => is_int($value) ? $this->order = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RouteStatus::from($value) : parent::assignMember($name, $value),
            'transferOnly' => is_bool($value) ? $this->transferOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
