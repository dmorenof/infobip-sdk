<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageDatePickerFormPage
 */
final class MessagesApiMessageDatePickerFormPage extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFormPage
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'nextPageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'pageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'text' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Identifier of the next page. If not set, the client assumes the current page to be the final page.
     */
    public string $nextPageIdentifier {
        set {
            $this->assigning('nextPageIdentifier', $value);
            $this->nextPageIdentifier = $value;
        }
    }
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageDatePickerFormPageOptions $options;
    /**
     * Unique identifier of the page.
     */
    public string $pageIdentifier {
        set {
            $this->assigning('pageIdentifier', $value);
            $this->pageIdentifier = $value;
        }
    }
    /**
     * Placed on the pages to denote the end page of the form. Can be set on multiple pages.
     */
    public bool $submitForm;
    /**
     * Text of the page.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * Title of the page.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'nextPageIdentifier' => is_string($value) ? $this->nextPageIdentifier = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageDatePickerFormPageOptions($value) : parent::assignMember($name, $value),
            'pageIdentifier' => is_string($value) ? $this->pageIdentifier = $value : parent::assignMember($name, $value),
            'submitForm' => is_bool($value) ? $this->submitForm = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
