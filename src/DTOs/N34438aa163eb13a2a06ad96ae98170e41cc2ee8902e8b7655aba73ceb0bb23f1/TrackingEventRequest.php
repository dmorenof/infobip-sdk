<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * TrackingEventRequest
 */
final class TrackingEventRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Boolean value corresponding to whether clicks for a message needs to be tracked or not.
     * Example: true
     */
    public bool $clicks;
    /**
     * Boolean value corresponding to whether opens for a message needs to be tracked or not.
     * Example: true
     */
    public bool $open;
    /**
     * Boolean value corresponding to whether unsubscribe for a message needs to be tracked or not.
     * Example: false
     */
    public bool $unsubscribe;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clicks' => is_bool($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'open' => is_bool($value) ? $this->open = $value : parent::assignMember($name, $value),
            'unsubscribe' => is_bool($value) ? $this->unsubscribe = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
