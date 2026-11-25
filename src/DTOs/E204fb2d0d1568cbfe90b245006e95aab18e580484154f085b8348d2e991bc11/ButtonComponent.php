<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * ButtonComponent
 */
final class ButtonComponent extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\HorizontalVerticalComponent
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
];

    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ButtonAction $action;
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
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Height $height;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing $margin;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Style $style;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Gravity::from($value) : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Height::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing::from($value) : parent::assignMember($name, $value),
            'style' => is_string($value) ? $this->style = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Style::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
