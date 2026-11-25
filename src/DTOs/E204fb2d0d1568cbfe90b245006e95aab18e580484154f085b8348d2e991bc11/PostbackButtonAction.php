<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * PostbackButtonAction
 */
final class PostbackButtonAction extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ButtonAction
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'data' => [
            'minLength' => 0,
            'maxLength' => 300,
        ],
        'displayText' => [
            'minLength' => 0,
            'maxLength' => 300,
        ],
        'label' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    public string $displayText {
        set {
            $this->assigning('displayText', $value);
            $this->displayText = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'displayText' => is_string($value) ? $this->displayText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
