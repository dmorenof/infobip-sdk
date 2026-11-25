<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * UriButtonAction
 */
final class UriButtonAction extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ButtonAction
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'label' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'uri' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $uri {
        set {
            $this->assigning('uri', $value);
            $this->uri = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'uri' => is_string($value) ? $this->uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
