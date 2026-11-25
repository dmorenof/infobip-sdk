<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MMSMoReport
 *
 * Results.
 */
final class MMSMoReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'mmsCount' => [
        'format' => 'int32',
    ],
];

    /**
     * [Application](https://www.infobip.com/docs/cpaas-x/application-and-entity-management#application) identifier the message belongs to.
     */
    public string $applicationId;
    /**
     * Custom callback data can be inserted during the setup phase.
     */
    public string $callbackData;
    /**
     * [Entity](https://www.infobip.com/docs/cpaas-x/application-and-entity-management#entity) identifier the message belongs to.
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
     * Received message parts.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MMSMoReport\MessageCollection $message;
    /**
     * ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * The number of sent message segments.
     * Format: int32
     */
    public int $mmsCount {
        set {
            $this->assigning('mmsCount', $value);
            $this->mmsCount = $value;
        }
    }
    public \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\Price $price;
    /**
     * Tells when Infobip platform received the message. It has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $receivedAt;
    /**
     * Subject of the received message.
     */
    public string $subject;
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
            'message' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->message = new \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MMSMoReport\MessageCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsMoMessagePart::class)) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'mmsCount' => is_int($value) ? $this->mmsCount = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\Price($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'userAgent' => is_string($value) ? $this->userAgent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
