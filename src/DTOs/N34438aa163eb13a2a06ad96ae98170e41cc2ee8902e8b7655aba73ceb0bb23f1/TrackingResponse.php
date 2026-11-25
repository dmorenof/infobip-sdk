<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * TrackingResponse
 *
 * Tracking details of the domain.
 */
final class TrackingResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether tracking of clicks is enabled.
     */
    public bool $clicks;
    /**
     * Indicates whether tracking of opens is enabled.
     */
    public bool $opens;
    /**
     * Indicates whether tracking of unsubscribes is enabled.
     */
    public bool $unsubscribe;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clicks' => is_bool($value) ? $this->clicks = $value : parent::assignMember($name, $value),
            'opens' => is_bool($value) ? $this->opens = $value : parent::assignMember($name, $value),
            'unsubscribe' => is_bool($value) ? $this->unsubscribe = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
