<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * PayloadConditionDto
 *
 * Specify the conditions of the event payload.
 */
final class PayloadConditionDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'attribute',
    'operator',
    'value',
];

    /**
     * Event payload attribute.
     * Example: "itemId"
     */
    public string $attribute;
    public \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PayloadOperator $operator;
    /**
     * Payload condition value.
     * Example: "10001"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attribute' => is_string($value) ? $this->attribute = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = \InfobipSDK\Enums\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PayloadOperator::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
