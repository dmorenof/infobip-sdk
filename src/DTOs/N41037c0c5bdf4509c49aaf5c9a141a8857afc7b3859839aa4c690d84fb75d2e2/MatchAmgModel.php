<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * MatchAmgModel
 *
 * List of matches.
 */
final class MatchAmgModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'personId',
    'type',
];

    /**
     * Person ID
     */
    public string $identifier;
    /**
     * Person's internal ID.
     * Format: int64
     */
    public int $personId;
    /**
     * Sender or application ID.
     */
    public string $sender;
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonUniqueFieldType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'personId' => is_int($value) ? $this->personId = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonUniqueFieldType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
