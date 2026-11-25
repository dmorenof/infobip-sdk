<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageFormBody
 */
final class MessagesApiMessageFormBody extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageBody
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'pages' => [
            'minItems' => 1,
        ],
        'startPageIdentifier' => [
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
     * Image of the received message.
     */
    public string $imageUrl;
    /**
     * Indicates whether to mark the response as private.
     */
    public bool $isPrivate;
    /**
     * An array of different pages to be shown in the form. If INTRO page is included it will always appear first.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFormBody\PagesCollection $pages {
        set {
            $this->assigning('pages', $value);
            $this->pages = $value;
        }
    }
    /**
     * If set to true then it shows the summary of all the selections made within the form.
     */
    public bool $showSummary;
    /**
     * Identifier for the starting page of the form. Must match one of the string identifiers for the configured pages.
     */
    public string $startPageIdentifier {
        set {
            $this->assigning('startPageIdentifier', $value);
            $this->startPageIdentifier = $value;
        }
    }
    /**
     * Text of the received message.
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
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'isPrivate' => is_bool($value) ? $this->isPrivate = $value : parent::assignMember($name, $value),
            'showSummary' => is_bool($value) ? $this->showSummary = $value : parent::assignMember($name, $value),
            'startPageIdentifier' => is_string($value) ? $this->startPageIdentifier = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
