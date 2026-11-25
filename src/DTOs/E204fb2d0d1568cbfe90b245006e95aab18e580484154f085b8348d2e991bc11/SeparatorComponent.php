<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * SeparatorComponent
 */
final class SeparatorComponent extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\HorizontalVerticalComponent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'color' => [
        'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
    ],
];

    public string $color {
        set {
            $this->assigning('color', $value);
            $this->color = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing $margin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
