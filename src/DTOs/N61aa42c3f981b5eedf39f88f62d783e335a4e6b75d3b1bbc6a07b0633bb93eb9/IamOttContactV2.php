<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9;

/**
 * IamOttContactV2
 */
final class IamOttContactV2 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'applicationId',
        'systemData',
        'userId',
    ];

    /**
     * Application Id on which the user is subscribed.
     */
    public string $applicationId;
    /**
     * System data collected from the user's profile.
     */
    public \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamOttContactV2\SystemDataMap $systemData;
    /**
     * Unique user ID for a person.
     */
    public string $userId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
