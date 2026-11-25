<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MMSMoWebhookResult
 */
final class MMSMoWebhookResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the application, if application and entity management is used.
     */
    public string $applicationId;
    /**
     * Custom callback data can be inserted during the setup phase.
     */
    public string $callbackData;
    /**
     * The ID of the entity, if application and entity management is used.
     */
    public string $entityId;
    /**
     * Sender ID that can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * Recipients of group MMS.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MMSMoReport\GroupCollection $group;
    /**
     * All parts of the received message.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MMSMoWebhookResult\MessageCollection $message;
    /**
     * ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * Message ID of paired outgoing message if matched by Infobip platform.
     */
    public string $pairedMessageId;
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\Price $price;
    /**
     * Date and time when Infobip received the message.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * Message destination address.
     */
    public string $to;
    /**
     * Identifier of the device from which the message was sent.
     */
    public string $userAgent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\Price($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'userAgent' => is_string($value) ? $this->userAgent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
