<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport;

final class MessageDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'text',
    'type',
];

    /**
     * Incoming message text.
     */
    public string $text;
    /**
     * Message type.
     */
    public \InfobipSDK\Enums\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport\Message\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport\Message\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
