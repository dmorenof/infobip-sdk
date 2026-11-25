<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * InputPage
 */
final class InputPage extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormPage
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'hintText' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'nextPageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'pageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'subtitle' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Text to give the user more input context that displays below the Input field.
     */
    public string $hintText {
        set {
            $this->assigning('hintText', $value);
            $this->hintText = $value;
        }
    }
    /**
     * Identifier of the next page. If not set, the client assumes the current page to be the final page.
     */
    public string $nextPageIdentifier {
        set {
            $this->assigning('nextPageIdentifier', $value);
            $this->nextPageIdentifier = $value;
        }
    }
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\InputPageOptions $options;
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
     * Question of the page.
     */
    public string $subtitle {
        set {
            $this->assigning('subtitle', $value);
            $this->subtitle = $value;
        }
    }
    /**
     * Title of the page.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hintText' => is_string($value) ? $this->hintText = $value : parent::assignMember($name, $value),
            'nextPageIdentifier' => is_string($value) ? $this->nextPageIdentifier = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\InputPageOptions($value) : parent::assignMember($name, $value),
            'pageIdentifier' => is_string($value) ? $this->pageIdentifier = $value : parent::assignMember($name, $value),
            'submitForm' => is_bool($value) ? $this->submitForm = $value : parent::assignMember($name, $value),
            'subtitle' => is_string($value) ? $this->subtitle = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
