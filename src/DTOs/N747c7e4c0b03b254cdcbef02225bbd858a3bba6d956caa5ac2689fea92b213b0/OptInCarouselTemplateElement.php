<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * OptInCarouselTemplateElement
 */
final class OptInCarouselTemplateElement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payload',
        'title',
    ];

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

    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\NotificationMessagesCtaText $notificationMessagesCtaText;
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
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'notificationMessagesCtaText' => is_string($value) ? $this->notificationMessagesCtaText = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\NotificationMessagesCtaText::from($value) : parent::assignMember($name, $value),
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
