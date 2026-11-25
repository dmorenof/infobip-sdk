<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * BaselineComponent
 */
class BaselineComponent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'FILLER' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\FillerComponent',
        'ICON' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\IconComponent',
        'SPACER' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\SpacerComponent',
        'TEXT' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\TextComponent',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.FillerComponent' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\FillerComponent',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.IconComponent' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\IconComponent',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.SpacerComponent' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\SpacerComponent',
        'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.TextComponent' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\TextComponent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ComponentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ComponentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
