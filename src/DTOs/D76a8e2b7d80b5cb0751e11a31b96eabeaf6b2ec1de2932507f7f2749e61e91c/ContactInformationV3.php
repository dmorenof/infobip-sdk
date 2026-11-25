<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * ContactInformationV3
 *
 * List of phones, emails and other information how a person can be contacted.
 */
final class ContactInformationV3 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'type',
];

    protected const array VALIDATION = [
    'identifier' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'sender' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Person ID. ID type must match the type parameter. Some channels (e,g., Apple Business Chat) use identifiers that contain unsafe characters. Make sure you URL-encode them in your API request. 255 characters max.
     * Example: "41793026727"
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * Indicates if this ID is preferred for communication.
     * Example: true
     */
    public bool $primary;
    /**
     * Sender or application ID. Sender is required for all identifier types except PHONE and EMAIL. 255 characters max.
     * Example: "41793026728"
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\ContactInformationTypeV3 $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'primary' => is_bool($value) ? $this->primary = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\ContactInformationTypeV3::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
