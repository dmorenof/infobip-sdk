<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * FlexContainer
 */
class FlexContainer extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'BUBBLE' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\BubbleFlexContainer',
    'CAROUSEL' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\CarouselFlexContainer',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.BubbleFlexContainer' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\BubbleFlexContainer',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.CarouselFlexContainer' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\CarouselFlexContainer',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ContainerType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ContainerType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
