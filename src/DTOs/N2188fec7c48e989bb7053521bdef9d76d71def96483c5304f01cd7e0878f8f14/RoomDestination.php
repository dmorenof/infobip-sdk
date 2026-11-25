<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * RoomDestination
 */
final class RoomDestination extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'password' => [
            'pattern' => '^[\\p{L}\\p{N}\\-_\\ ]{4,20}$',
        ],
        'roomName' => [
            'minLength' => 1,
            'pattern' => '^[\\p{L}\\p{N}\\-_+=/.]{3,250}$',
        ],
    ];

    /**
     * Destination display name, if defined, that the call Link UI will use instead of an agent name. If a destination display name is an empty string, the UI will hide it.
     */
    public string $displayName;
    /**
     * Password for entering a room.
     * If defined, a user will have to enter the same password before joining.
     * It can be between 4 and 20 characters long and can contain numbers, letters and dashes, underscores and spaces.
     * If not defined, anyone with the link will be able to join the call.
     */
    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }
    /**
     * Name of a meeting room. Note that using the same roomName across different Call Link URLs will result in all participants joining the same meeting room. To create separate meeting rooms, ensure each room name is unique.
     */
    public string $roomName {
        set {
            $this->assigning('roomName', $value);
            $this->roomName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'roomName' => is_string($value) ? $this->roomName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
