<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * TikTokMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class TikTokMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\ClientPriority $priority;
    public \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\RequestSchedulingSettings $schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\ClientPriority::from($value) : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
