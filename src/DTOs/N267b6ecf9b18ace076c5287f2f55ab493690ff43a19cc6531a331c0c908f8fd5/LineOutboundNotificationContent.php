<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * LineOutboundNotificationContent
 */
final class LineOutboundNotificationContent extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\LineOnOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'altText' => [
            'minLength' => 0,
            'maxLength' => 400,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Alternative text shown in notifications, the chat list and quoted messages instead of the message itself.
     */
    public string $altText {
        set {
            $this->assigning('altText', $value);
            $this->altText = $value;
        }
    }
    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\LineNotificationContainer $contents;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altText' => is_string($value) ? $this->altText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
