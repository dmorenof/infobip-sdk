<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * WhatsAppCallingPermissionResponse
 */
final class WhatsAppCallingPermissionResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'actions',
        'status',
    ];

    /**
     * A list of actions a sender may undertake to facilitate a call permission or a business initiated call.
     */
    public \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppCallingPermissionResponse\ActionsCollection $actions;
    /**
     * Time at which the calling permission will expire. Present only when `TEMPORARY` permission is granted.
     * Example: "2025-10-06T08:12:26.422Z"
     * Format: date-time
     */
    public string $expirationTime;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->actions = new \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppCallingPermissionResponse\ActionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionAction::class)) : parent::assignMember($name, $value),
            'expirationTime' => is_string($value) ? $this->expirationTime = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingPermissionStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
