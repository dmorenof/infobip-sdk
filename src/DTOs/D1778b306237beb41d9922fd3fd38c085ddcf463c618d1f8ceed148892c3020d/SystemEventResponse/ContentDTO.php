<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D1778b306237beb41d9922fd3fd38c085ddcf463c618d1f8ceed148892c3020d\SystemEventResponse;

/**
 * Content of the event.
 */
final class ContentDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'description',
    'hash',
    'type',
    'userId',
    'userNumber',
];

    /**
     * Description of the event.
     */
    public string $description;
    /**
     * Identity hash.
     */
    public string $hash;
    /**
     * Indicates type of system event forwarded.
     */
    public \InfobipSDK\Enums\D1778b306237beb41d9922fd3fd38c085ddcf463c618d1f8ceed148892c3020d\SystemEventResponse\AllOfContent\TypeEnum $type;
    /**
     * Business-scoped user ID (BSUID) assigned by Meta. Stable identifier for the end user, scoped to the receiving business.
     */
    public string $userId;
    /**
     * End user's number. Must be in international format.
     */
    public string $userNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'hash' => is_string($value) ? $this->hash = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\D1778b306237beb41d9922fd3fd38c085ddcf463c618d1f8ceed148892c3020d\SystemEventResponse\AllOfContent\TypeEnum::from($value) : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            'userNumber' => is_string($value) ? $this->userNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
