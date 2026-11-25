<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloOutboundQuoteConsultationContent
 */
final class ZaloOutboundQuoteConsultationContent extends \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'quoteMessageId' => [
        'minLength' => 1,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 2000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Message id of the message you want to reply to.
     */
    public string $quoteMessageId {
        set {
            $this->assigning('quoteMessageId', $value);
            $this->quoteMessageId = $value;
        }
    }
    /**
     * Content of the message being sent.
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
            'quoteMessageId' => is_string($value) ? $this->quoteMessageId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
