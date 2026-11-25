<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * FlowButtonApiData
 */
final class FlowButtonApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ButtonApiData
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'text' => [
        'minLength' => 0,
        'maxLength' => 25,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Type of action after pressing the button.
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\FlowButtonApiData\FlowActionEnum $flowAction;
    /**
     * Flow Id.
     * Format: int64
     */
    public int $flowId;
    /**
     * Name of screen to navigate, required if flow action is 'navigate'.
     */
    public string $navigateScreen;
    /**
     * Button text.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flowAction' => is_string($value) ? $this->flowAction = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\FlowButtonApiData\FlowActionEnum::from($value) : parent::assignMember($name, $value),
            'flowId' => is_int($value) ? $this->flowId = $value : parent::assignMember($name, $value),
            'navigateScreen' => is_string($value) ? $this->navigateScreen = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
