<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * SmsMoReport
 *
 * An array of result objects.
 */
final class SmsMoReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'smsCount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Application id linked to the message. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId;
    /**
     * Custom callback data sent over the notifyUrl.
     */
    public string $callbackData;
    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId;
    /**
     * Content of the message without a keyword (if a keyword was sent).
     */
    public string $cleanText;
    /**
     * Entity id linked to the message. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId;
    /**
     * Sender ID that can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * Keyword extracted from the message content.
     */
    public string $keyword;
    /**
     * Unique message ID.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\MoPrice $price;
    /**
     * Indicates when the Infobip platform received the message. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * The number of parts the message content was split into.
     * Format: int32
     */
    public int $smsCount {
        set {
            $this->assigning('smsCount', $value);
            $this->smsCount = $value;
        }
    }
    /**
     * Full content of the message.
     */
    public string $text;
    /**
     * The destination address of the message.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'cleanText' => is_string($value) ? $this->cleanText = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\MoPrice($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'smsCount' => is_int($value) ? $this->smsCount = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
