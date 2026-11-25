<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * InboundTestingRequest
 * Example: {"message":{"content":{"text":"Hello","type":"TEXT"},"channel":"WHATSAPP"},"userDestination":"38595112233"}
 */
final class InboundTestingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
        'userDestination',
    ];

    protected const array VALIDATION = [
        'userDestination' => [
            'minLength' => 1,
        ],
    ];

    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicInboundMessage $message;
    /**
     * Inbound message sender.
     */
    public string $userDestination {
        set {
            $this->assigning('userDestination', $value);
            $this->userDestination = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => $value instanceof \stdClass ? $this->message = new \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicInboundMessage($value) : parent::assignMember($name, $value),
            'userDestination' => is_string($value) ? $this->userDestination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
