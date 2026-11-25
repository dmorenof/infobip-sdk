<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\SendCustomEventsBodyItem;

/**
 * Used to match the event to an existing person profile using the provided identifier.<br> If no matching profile is found, a new profile will be automatically created.<br>**Note**: New profiles can only be created for the following identifier types: `PHONE`, `EMAIL`, or `EXTERNAL_ID`.
 */
final class EventsBodyItemIdentifierRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'type',
    ];

    /**
     * Unique identifier of the person who performed the event. The value must match the `type` property.
     */
    public string $id;
    /**
     * Sender or application ID. `sender` is required for all identifier types except `ID`, `EXTERNAL_ID`, `PHONE`, `EMAIL`.
     */
    public ?string $sender;
    public \InfobipSDK\Enums\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\PersonUniqueFieldType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'sender' => $value === null || is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\PersonUniqueFieldType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
