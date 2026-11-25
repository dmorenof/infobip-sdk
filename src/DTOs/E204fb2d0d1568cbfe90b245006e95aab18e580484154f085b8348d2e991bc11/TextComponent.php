<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * TextComponent
 */
final class TextComponent extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\BaselineComponent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'color' => [
        'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
    ],
    'flex' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
    'maxLines' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'text' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ButtonAction $action;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Alignment $align;
    public string $color {
        set {
            $this->assigning('color', $value);
            $this->color = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $flex {
        set {
            $this->assigning('flex', $value);
            $this->flex = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Gravity $gravity;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing $margin;
    /**
     * Format: int32
     */
    public int $maxLines {
        set {
            $this->assigning('maxLines', $value);
            $this->maxLines = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Size $size;
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Weight $weight;
    public bool $wrap;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'align' => is_string($value) ? $this->align = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Alignment::from($value) : parent::assignMember($name, $value),
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Gravity::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing::from($value) : parent::assignMember($name, $value),
            'maxLines' => is_int($value) ? $this->maxLines = $value : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Size::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'weight' => is_string($value) ? $this->weight = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Weight::from($value) : parent::assignMember($name, $value),
            'wrap' => is_bool($value) ? $this->wrap = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
