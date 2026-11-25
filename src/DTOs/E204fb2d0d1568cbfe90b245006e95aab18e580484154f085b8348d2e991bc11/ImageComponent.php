<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * ImageComponent
 */
final class ImageComponent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array VALIDATION = [
    'flex' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => 'https://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?(jpg|png)$',
    ],
];

    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ButtonAction $action;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Alignment $align;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\AspectMode $aspectMode;
    public string $aspectRatio;
    public string $backgroundColor;
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
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ImageSize $size;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ComponentType $type;
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'align' => is_string($value) ? $this->align = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Alignment::from($value) : parent::assignMember($name, $value),
            'aspectMode' => is_string($value) ? $this->aspectMode = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\AspectMode::from($value) : parent::assignMember($name, $value),
            'aspectRatio' => is_string($value) ? $this->aspectRatio = $value : parent::assignMember($name, $value),
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Gravity::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Spacing::from($value) : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ImageSize::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ComponentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
