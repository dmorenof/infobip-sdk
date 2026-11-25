<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageImageBody
 */
final class MessagesApiMessageImageBody extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBody
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'imageAction' => [
        'minLength' => 0,
        'maxLength' => 1000,
        'pattern' => '(http|https|viber)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => '',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL opened when the user taps the image. Only supported for the VIBER_BM channel, for image messages with text (content.header, content.body.text or content.footer), optionally with a button. It is independent of the button URL. If omitted, image taps use the button URL.
     */
    public string $imageAction {
        set {
            $this->assigning('imageAction', $value);
            $this->imageAction = $value;
        }
    }
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageImageFormat $imageFormat;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageImageRatio $ratio;
    /**
     * Image caption.
     */
    public string $text;
    /**
     * URL of the image.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageAction' => is_string($value) ? $this->imageAction = $value : parent::assignMember($name, $value),
            'imageFormat' => is_string($value) ? $this->imageFormat = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageImageFormat::from($value) : parent::assignMember($name, $value),
            'ratio' => is_string($value) ? $this->ratio = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageImageRatio::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
