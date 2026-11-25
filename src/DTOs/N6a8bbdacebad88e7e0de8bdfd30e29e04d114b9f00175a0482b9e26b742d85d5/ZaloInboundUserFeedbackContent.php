<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloInboundUserFeedbackContent
 */
final class ZaloInboundUserFeedbackContent extends \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'eventName' => [
            'minLength' => 1,
        ],
        'msgId' => [
            'minLength' => 1,
        ],
        'rate' => [
            'format' => 'int32',
        ],
        'trackingId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $eventName {
        set {
            $this->assigning('eventName', $value);
            $this->eventName = $value;
        }
    }
    public \InfobipSDK\Collections\StringCollection $feedbacks;
    public string $msgId {
        set {
            $this->assigning('msgId', $value);
            $this->msgId = $value;
        }
    }
    public string $note;
    /**
     * Format: int32
     */
    public int $rate {
        set {
            $this->assigning('rate', $value);
            $this->rate = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $submitTime;
    public string $trackingId {
        set {
            $this->assigning('trackingId', $value);
            $this->trackingId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eventName' => is_string($value) ? $this->eventName = $value : parent::assignMember($name, $value),
            'feedbacks' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->feedbacks = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'msgId' => is_string($value) ? $this->msgId = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'rate' => is_int($value) ? $this->rate = $value : parent::assignMember($name, $value),
            'submitTime' => is_string($value) ? $this->submitTime = $value : parent::assignMember($name, $value),
            'trackingId' => is_string($value) ? $this->trackingId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
