<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloOutboundReactionContent
 */
final class ZaloOutboundReactionContent extends \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'reactMessageId' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloReactIcon $reactIcon;
    /**
     * ID of the message to react to.
     */
    public string $reactMessageId {
        set {
            $this->assigning('reactMessageId', $value);
            $this->reactMessageId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reactIcon' => is_string($value) ? $this->reactIcon = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloReactIcon::from($value) : parent::assignMember($name, $value),
            'reactMessageId' => is_string($value) ? $this->reactMessageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
