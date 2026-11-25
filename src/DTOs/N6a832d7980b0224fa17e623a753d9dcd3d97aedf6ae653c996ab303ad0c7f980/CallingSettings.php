<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * CallingSettings
 *
 * The sender's calling configuration, as currently set on Meta.
 */
final class CallingSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callIconVisibility',
    'callbackPermissionStatus',
    'status',
];

    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallIconVisibility $callIconVisibility;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallbackPermissionStatus $callbackPermissionStatus;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callIconVisibility' => is_string($value) ? $this->callIconVisibility = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallIconVisibility::from($value) : parent::assignMember($name, $value),
            'callbackPermissionStatus' => is_string($value) ? $this->callbackPermissionStatus = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallbackPermissionStatus::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
