<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * CreatedSessionResponse
 *
 * JSON containing information about the new session.
 */
final class CreatedSessionResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * URL with `sessionId` to be sent to the end user which would then directly apply the scenario.
     * Example: "https://example.com/web/?sessionId=efc373be-ab6d-4c63-b798-1f65b7b4b2b3"
     */
    public string $redirectUrl;
    /**
     * Unique session identifier.
     * Example: "efc373be-ab6d-4c63-b798-1f65b7b4b2b3"
     */
    public string $sessionId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'redirectUrl' => is_string($value) ? $this->redirectUrl = $value : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
