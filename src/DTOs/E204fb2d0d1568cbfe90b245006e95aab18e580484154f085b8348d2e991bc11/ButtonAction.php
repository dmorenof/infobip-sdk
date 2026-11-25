<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * ButtonAction
 */
class ButtonAction extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'MESSAGE' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\MessageButtonAction',
    'POSTBACK' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\PostbackButtonAction',
    'URI' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\UriButtonAction',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.MessageButtonAction' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\MessageButtonAction',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.PostbackButtonAction' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\PostbackButtonAction',
    'e204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11.UriButtonAction' => 'InfobipSDK\\DTOs\\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\\UriButtonAction',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $label;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
