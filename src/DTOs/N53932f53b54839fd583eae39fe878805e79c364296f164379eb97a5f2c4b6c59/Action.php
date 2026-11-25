<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Action
 *
 * Action triggered when the bubble is tapped.
 */
class Action extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.CameraAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CameraAction',
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.CameraRollAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CameraRollAction',
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.DatetimePickerAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\DatetimePickerAction',
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.LocationAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LocationAction',
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.MessageAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\MessageAction',
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.PostbackAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\PostbackAction',
    '53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59.UriAction' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\UriAction',
    'CAMERA' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CameraAction',
    'CAMERAROLL' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\CameraRollAction',
    'DATETIMEPICKER' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\DatetimePickerAction',
    'LOCATION' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LocationAction',
    'MESSAGE' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\MessageAction',
    'POSTBACK' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\PostbackAction',
    'URI' => 'InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\UriAction',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
