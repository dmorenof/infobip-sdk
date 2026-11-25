<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * TestingStartResponse
 * Example: {"testId":123,"sender":"12343534"}
 */
final class TestingStartResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Sender used in test.
     */
    public string $sender;
    /**
     * Test Id.
     * Format: int64
     */
    public int $testId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'testId' => is_int($value) ? $this->testId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
