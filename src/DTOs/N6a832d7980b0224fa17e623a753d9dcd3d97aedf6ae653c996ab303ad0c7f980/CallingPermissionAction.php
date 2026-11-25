<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * CallingPermissionAction
 *
 * A list of actions a sender may undertake to facilitate a call permission or a business initiated call.
 */
final class CallingPermissionAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'canPerformAction',
        'limits',
        'name',
    ];

    /**
     * Whether the action can be performed now, taking into account all limits.
     */
    public bool $canPerformAction;
    /**
     * A list of time-bound restrictions for the given action.
     */
    public \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionAction\LimitsCollection $limits;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionActionName $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canPerformAction' => is_bool($value) ? $this->canPerformAction = $value : parent::assignMember($name, $value),
            'limits' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->limits = new \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionAction\LimitsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionActionLimit::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionActionName::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
