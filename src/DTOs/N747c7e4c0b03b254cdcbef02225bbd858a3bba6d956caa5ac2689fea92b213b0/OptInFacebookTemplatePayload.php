<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * OptInFacebookTemplatePayload
 */
final class OptInFacebookTemplatePayload extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookTemplatePayload
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'imageUrl' => [
            'pattern' => '',
        ],
        'payload' => [
            'minLength' => 1,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 65,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ImageAspectRatio $imageAspectRatio;
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\NotificationMessagesCtaText $notificationMessagesCtaText;
    public string $notificationMessagesTimezone;
    public string $payload {
        set {
            $this->assigning('payload', $value);
            $this->payload = $value;
        }
    }
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageAspectRatio' => is_string($value) ? $this->imageAspectRatio = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ImageAspectRatio::from($value) : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'notificationMessagesCtaText' => is_string($value) ? $this->notificationMessagesCtaText = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\NotificationMessagesCtaText::from($value) : parent::assignMember($name, $value),
            'notificationMessagesTimezone' => is_string($value) ? $this->notificationMessagesTimezone = $value : parent::assignMember($name, $value),
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
