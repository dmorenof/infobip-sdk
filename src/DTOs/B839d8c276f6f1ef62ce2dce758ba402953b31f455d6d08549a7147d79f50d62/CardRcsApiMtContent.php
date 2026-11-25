<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CardRcsApiMtContent
 */
final class CardRcsApiMtContent extends \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\FreeFormRcsApiMtContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'suggestions' => [
        'minItems' => 0,
        'maxItems' => 10,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Alignment $alignment;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardContent $content;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Orientation $orientation;
    /**
     * List of suggestions
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardContent\SuggestionsCollection $suggestions {
        set {
            $this->assigning('suggestions', $value);
            $this->suggestions = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alignment' => is_string($value) ? $this->alignment = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Alignment::from($value) : parent::assignMember($name, $value),
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardContent($value) : parent::assignMember($name, $value),
            'orientation' => is_string($value) ? $this->orientation = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Orientation::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
