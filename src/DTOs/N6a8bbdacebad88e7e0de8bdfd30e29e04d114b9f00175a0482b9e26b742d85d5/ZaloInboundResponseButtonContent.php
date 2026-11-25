<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloInboundResponseButtonContent
 */
final class ZaloInboundResponseButtonContent extends \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'buttonText' => [
            'minLength' => 1,
        ],
        'buttonType' => [
            'minLength' => 1,
        ],
        'eventName' => [
            'minLength' => 1,
        ],
        'trackingId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $buttonText {
        set {
            $this->assigning('buttonText', $value);
            $this->buttonText = $value;
        }
    }
    public string $buttonType {
        set {
            $this->assigning('buttonType', $value);
            $this->buttonType = $value;
        }
    }
    public string $eventName {
        set {
            $this->assigning('eventName', $value);
            $this->eventName = $value;
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
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'buttonType' => is_string($value) ? $this->buttonType = $value : parent::assignMember($name, $value),
            'eventName' => is_string($value) ? $this->eventName = $value : parent::assignMember($name, $value),
            'submitTime' => is_string($value) ? $this->submitTime = $value : parent::assignMember($name, $value),
            'trackingId' => is_string($value) ? $this->trackingId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
