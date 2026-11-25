<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * TextFacebookMtQuickReply
 */
final class TextFacebookMtQuickReply extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookMtQuickReply
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'payload' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $imageUrl;
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
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
