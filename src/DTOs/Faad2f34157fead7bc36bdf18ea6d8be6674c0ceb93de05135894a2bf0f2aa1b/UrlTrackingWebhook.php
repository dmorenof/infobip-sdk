<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * UrlTrackingWebhook
 */
final class UrlTrackingWebhook extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Used when specifying an application in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId;
    /**
     * The ID that uniquely identifies a list of messages. This is either defined by user in the request or auto generated.
     */
    public string $bulkId;
    /**
     * The callback data sent through the callbackData field in your fully featured message.
     */
    public string $callbackData;
    /**
     * Used when specifying an entity in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId;
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\GeoLocationInfoWrapper $geoLocationInfo;
    /**
     * The ID that uniquely identifies the message sent to the recipient.
     */
    public string $messageId;
    /**
     * Tells the type of user event that took place. Possible events: CLICKED
     */
    public string $notificationType;
    /**
     * Recipient of the message.
     */
    public string $recipient;
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\RecipientInfo $recipientInfo;
    /**
     * This is timestamp epoch millis when we received event for CLICK.
     * Format: int64
     */
    public int $sendDateTime;
    /**
     * The link the recipient has clicked.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'geoLocationInfo' => $value instanceof \stdClass ? $this->geoLocationInfo = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\GeoLocationInfoWrapper($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'notificationType' => is_string($value) ? $this->notificationType = $value : parent::assignMember($name, $value),
            'recipient' => is_string($value) ? $this->recipient = $value : parent::assignMember($name, $value),
            'recipientInfo' => $value instanceof \stdClass ? $this->recipientInfo = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\RecipientInfo($value) : parent::assignMember($name, $value),
            'sendDateTime' => is_int($value) ? $this->sendDateTime = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
