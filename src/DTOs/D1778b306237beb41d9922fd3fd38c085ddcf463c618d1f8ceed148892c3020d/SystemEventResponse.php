<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D1778b306237beb41d9922fd3fd38c085ddcf463c618d1f8ceed148892c3020d;

/**
 * whatsappSystemReportsSystemEventResponse
 */
final class SystemEventResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Content of the event.
     */
    public \InfobipSDK\DTOs\D1778b306237beb41d9922fd3fd38c085ddcf463c618d1f8ceed148892c3020d\SystemEventResponse\ContentDTO $content;
    /**
     * Tells when the event occurred. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Registered WhatsApp sender number.
     */
    public string $from;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
