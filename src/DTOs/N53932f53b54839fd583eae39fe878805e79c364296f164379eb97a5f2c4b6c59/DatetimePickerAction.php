<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * DatetimePickerAction
 */
final class DatetimePickerAction extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'data' => [
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

    /**
     * String returned in the postback webhook event.
     * Example: "storeId=123"
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * Initial value shown in the picker. Format depends on mode: DATE `yyyy-MM-dd`, TIME `HH:mm[:ss]`, DATETIME `yyyy-MM-dd'T'HH:mm[:ss]`.
     * Example: "2024-01-15"
     */
    public string $initial;
    /**
     * Label for the action button.
     * Example: "Select date"
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * Maximum selectable value. Same format rules as initial for the chosen mode.
     * Example: "2024-12-31"
     */
    public string $max;
    /**
     * Minimum selectable value. Same format rules as initial for the chosen mode.
     * Example: "2024-01-01"
     */
    public string $min;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\DatetimePickerMode $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'initial' => is_string($value) ? $this->initial = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'max' => is_string($value) ? $this->max = $value : parent::assignMember($name, $value),
            'min' => is_string($value) ? $this->min = $value : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\DatetimePickerMode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
