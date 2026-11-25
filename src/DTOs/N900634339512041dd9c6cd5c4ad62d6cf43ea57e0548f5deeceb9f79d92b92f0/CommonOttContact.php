<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * CommonOttContact
 *
 * A list of person's KakaoTalk destinations.
 */
final class CommonOttContact extends \Dmorenof\SdkRuntime\DTO
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
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\CommonOttContact\SystemDataMap $systemData;
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
