<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * WebhookStatusNotifApiDocResult
 *
 * List of events provided in a single request.
 */
final class WebhookStatusNotifApiDocResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'event',
    'receivedAt',
];

    /**
     * Object containing event data.
     */
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookStatusNotifApiDocResult\ContentDTO $content;
    /**
     * Name of event that is received.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookStatusNotifApiDocResult\EventEnum $event;
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform $platform;
    /**
     * Date and time when the request status was updated.
     * Format: date-time
     */
    public string $receivedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookStatusNotifApiDocResult\EventEnum::from($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
