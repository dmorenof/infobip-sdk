<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageIntroFormPage
 */
final class MessagesApiMessageIntroFormPage extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFormPage
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text on the button shown on the main page. If missing then this view doesn't display and continues onto the first module.
     */
    public string $buttonText;
    /**
     * Image to be shown at the top of the main page.
     */
    public string $imageUrl;
    /**
     * If set, displays additional text on the main page underneath the title.
     */
    public string $text;
    /**
     * If set, it displays in bold the title on the main page underneath the image.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonText' => is_string($value) ? $this->buttonText = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
