<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * PublicAnswersEventExample
 */
final class PublicAnswersEventExample extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Account key.
     */
    public string $accountKey;
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\DialogInformation $lastDialog;
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicOutboundMessage $outboundMessage;
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\SessionInformationExample $sessionInformation;
    /**
     * The timestamp of the event.
     * Format: date-time
     */
    public string $timestamp;
    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\EventType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountKey' => is_string($value) ? $this->accountKey = $value : parent::assignMember($name, $value),
            'lastDialog' => $value instanceof \stdClass ? $this->lastDialog = new \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\DialogInformation($value) : parent::assignMember($name, $value),
            'outboundMessage' => $value instanceof \stdClass ? $this->outboundMessage = new \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicOutboundMessage($value) : parent::assignMember($name, $value),
            'sessionInformation' => $value instanceof \stdClass ? $this->sessionInformation = new \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\SessionInformationExample($value) : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\EventType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
