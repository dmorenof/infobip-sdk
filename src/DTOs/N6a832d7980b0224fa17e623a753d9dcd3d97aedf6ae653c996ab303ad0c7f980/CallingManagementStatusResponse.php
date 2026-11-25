<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * CallingManagementStatusResponse
 */
final class CallingManagementStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callingAllowed',
    'callingSettings',
];

    /**
     * Whether the sender is currently allowed to make and receive WhatsApp calls, taking into account both the sender's Meta calling status and the assigned calling capability. Can be `false` even when `callingSettings.status` is `ENABLED`, if the capability required to actually place or receive calls has not been granted.
     * Example: true
     */
    public bool $callingAllowed;
    public \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingSettings $callingSettings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callingAllowed' => is_bool($value) ? $this->callingAllowed = $value : parent::assignMember($name, $value),
            'callingSettings' => $value instanceof \stdClass ? $this->callingSettings = new \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
