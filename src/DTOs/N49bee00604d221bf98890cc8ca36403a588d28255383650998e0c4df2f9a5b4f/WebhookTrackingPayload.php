<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f;

/**
 * WebhookTrackingPayload
 */
final class WebhookTrackingPayload extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Used when specifying an application in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId;
    /**
     * The ID that uniquely identifies a list of email messages. This is either defined by user in the request or auto generated.
     */
    public string $bulkId;
    /**
     * The callback data sent through the callbackData field in your fully featured Email message.
     */
    public string $callbackData;
    /**
     * ID of a campaign that was sent in the message.
     */
    public string $campaignReferenceId;
    /**
     * The sending domain used to send the email to the recipient.
     */
    public string $domain;
    /**
     * Used when specifying an entity in outbound send requests. It is also returned in notification events. For detailed usage, refer to the [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId;
    /**
     * Unique ID of the event. This ID can be used for deduplication purposes.
     */
    public string $eventId;
    public \InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f\GeoLocationInfo $geoLocationInfo;
    /**
     * The ID that uniquely identifies the message sent to the recipient.
     */
    public string $messageId;
    /**
     * Tells the type of user event that took place. Possible events: `OPENED`, `CLICKED`, `COMPLAINED`, `LATE_BOUNCE`, `UNSUBSCRIBED`, `ARTIFICIAL_CLICKED`.
     */
    public string $notificationType;
    /**
     * Recipient of the email.
     */
    public string $recipient;
    public \InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f\RecipientInfo $recipientInfo;
    /**
     * The time at which the event happened. Time is in milliseconds.
     */
    public float $sendDateTime;
    /**
     * The link the recipient has clicked. This attribute will only be present if the event is of the type `CLICKED` or `ARTIFICIAL_CLICKED`.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'eventId' => is_string($value) ? $this->eventId = $value : parent::assignMember($name, $value),
            'geoLocationInfo' => $value instanceof \stdClass ? $this->geoLocationInfo = new \InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f\GeoLocationInfo($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'notificationType' => is_string($value) ? $this->notificationType = $value : parent::assignMember($name, $value),
            'recipient' => is_string($value) ? $this->recipient = $value : parent::assignMember($name, $value),
            'recipientInfo' => $value instanceof \stdClass ? $this->recipientInfo = new \InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f\RecipientInfo($value) : parent::assignMember($name, $value),
            'sendDateTime' => is_float($value) ? $this->sendDateTime = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
