<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoChinguBotKeywordButton
 */
final class KakaoChinguBotKeywordButton extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguButton
{
    public const array REQUIRED_FIELDS = [
    'buttonText',
];

    protected const array VALIDATION = [
    'buttonText' => [
        'minLength' => 1,
        'maxLength' => 28,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'buttonText',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

}
