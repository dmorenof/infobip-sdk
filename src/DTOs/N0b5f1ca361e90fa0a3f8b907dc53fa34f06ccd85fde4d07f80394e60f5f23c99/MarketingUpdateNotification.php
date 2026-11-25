<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * whatsappMarketingUpdateNotification
 */
final class MarketingUpdateNotification extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'description' => [
        'minLength' => 1,
    ],
    'from' => [
        'minLength' => 1,
    ],
    'notificationMessagesStatus' => [
        'minLength' => 1,
    ],
    'sender' => [
        'minLength' => 1,
    ],
];

    /**
     * Description of marketing update notification.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * End user's phone number.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    /**
     * Status of marketing update notification.
     */
    public string $notificationMessagesStatus {
        set {
            $this->assigning('notificationMessagesStatus', $value);
            $this->notificationMessagesStatus = $value;
        }
    }
    /**
     * Registered WhatsApp sender number.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'notificationMessagesStatus' => is_string($value) ? $this->notificationMessagesStatus = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
