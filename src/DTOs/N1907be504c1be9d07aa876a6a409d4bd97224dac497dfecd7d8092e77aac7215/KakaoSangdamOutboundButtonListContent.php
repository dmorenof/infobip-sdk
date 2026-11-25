<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamOutboundButtonListContent
 *
 * Message with text and a list of interactive buttons.
 */
final class KakaoSangdamOutboundButtonListContent extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 1,
        'maxItems' => 5,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * List of buttons attached to the message.
     */
    public \InfobipSDK\Collections\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamOutboundButtonListContent\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    /**
     * Message text content.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
