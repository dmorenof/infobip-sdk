<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * WebhookPersonUniqueField
 *
 * Unique identifier of the participant.
 */
final class WebhookPersonUniqueField extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'type',
];

    /**
     * Unique ID for a person
     */
    public string $identifier;
    /**
     * Sender or application ID.`sender` is required for all identifier types except `PHONE`, `EMAIL`, `EXTERNAL_ID`
     */
    public ?string $sender;
    public \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\WebhookPersonUniqueFieldType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'sender' => $value === null || is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\WebhookPersonUniqueFieldType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
