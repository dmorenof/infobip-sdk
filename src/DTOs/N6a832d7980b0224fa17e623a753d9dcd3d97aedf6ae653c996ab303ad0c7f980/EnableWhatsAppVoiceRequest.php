<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * EnableWhatsAppVoiceRequest
 */
final class EnableWhatsAppVoiceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallIconVisibility $callIconVisibility;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallbackPermissionStatus $callbackPermissionStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callIconVisibility' => is_string($value) ? $this->callIconVisibility = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallIconVisibility::from($value) : parent::assignMember($name, $value),
            'callbackPermissionStatus' => is_string($value) ? $this->callbackPermissionStatus = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallbackPermissionStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
