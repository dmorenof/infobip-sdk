<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * SessionInformationExample
 *
 * Details about session.
 */
final class SessionInformationExample extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'botInformation',
    'callbackData',
    'componentSessionId',
    'endUserDestination',
    'externalId',
    'externalMetadata',
    'sessionId',
];

    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\BotInformationExample $botInformation;
    /**
     * Callback data from last received message.
     */
    public string $callbackData;
    /**
     * Component session identifier.
     * Format: uuid
     */
    public string $componentSessionId;
    /**
     * End-user destination.
     */
    public string $endUserDestination;
    /**
     * External identifier.
     */
    public string $externalId;
    /**
     * External metadata.
     */
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\SessionInformationExample\ExternalMetadataMap $externalMetadata;
    /**
     * Unique session identifier.
     * Format: uuid
     */
    public string $sessionId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'botInformation' => $value instanceof \stdClass ? $this->botInformation = new \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\BotInformationExample($value) : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'componentSessionId' => is_string($value) ? $this->componentSessionId = $value : parent::assignMember($name, $value),
            'endUserDestination' => is_string($value) ? $this->endUserDestination = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
