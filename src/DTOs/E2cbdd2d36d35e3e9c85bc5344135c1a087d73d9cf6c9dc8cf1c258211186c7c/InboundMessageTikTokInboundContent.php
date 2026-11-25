<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

/**
 * InboundMessageTikTokInboundContent
 *
 * Collection of mobile originated messages.
 */
final class InboundMessageTikTokInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'integrationType',
    'message',
    'messageId',
    'price',
    'receivedAt',
    'sender',
    'to',
];

    protected const array VALIDATION = [
    'applicationId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'entityId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Used when specifying an application in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * Callback data sent through ‛callbackData‛ field when sending message.
     */
    public string $callbackData;
    /**
     * Used when specifying an entity in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * Integration type.
     */
    public string $integrationType;
    /**
     * Keyword extracted from the message text.
     */
    public string $keyword;
    public \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokInboundContent $message;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * Message ID of paired outgoing message if matched by Infobip platform.
     */
    public string $pairedMessageId;
    public \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\MessagePrice $price;
    /**
     * Date and time when Infobip received the message. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * Number which sent the message.
     */
    public string $sender;
    /**
     * Sender provided during the activation process.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'integrationType' => is_string($value) ? $this->integrationType = $value : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\MessagePrice($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
