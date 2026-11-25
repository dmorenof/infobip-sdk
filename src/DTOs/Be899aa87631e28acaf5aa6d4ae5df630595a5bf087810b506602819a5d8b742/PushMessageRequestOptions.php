<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class PushMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\RequestSchedulingSettings $schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
