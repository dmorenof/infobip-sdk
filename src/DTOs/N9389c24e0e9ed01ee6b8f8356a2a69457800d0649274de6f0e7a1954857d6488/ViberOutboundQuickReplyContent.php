<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberOutboundQuickReplyContent
 */
final class ViberOutboundQuickReplyContent extends \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'options' => [
        'minItems' => 2,
        'maxItems' => 10,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 85,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * List of possible options.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\KeywordsCollection $options {
        set {
            $this->assigning('options', $value);
            $this->options = $value;
        }
    }
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberQuickReplyOptionsStyle $optionsStyle;
    /**
     * Text to be displayed alongside the options.
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
            'options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->options = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\KeywordsCollection($value) : parent::assignMember($name, $value),
            'optionsStyle' => is_string($value) ? $this->optionsStyle = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberQuickReplyOptionsStyle::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
