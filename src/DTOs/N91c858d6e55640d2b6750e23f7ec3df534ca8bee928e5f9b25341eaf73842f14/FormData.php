<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * FormData
 *
 * Data of the form.
 */
final class FormData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'pages',
    'startPageIdentifier',
];

    protected const array PROPERTY_MAP = [
    'private' => 'private_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'private_' => 'private',
];

    protected const array VALIDATION = [
    'pages' => [
        'minItems' => 1,
    ],
    'startPageIdentifier' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
];

    /**
     * An array of different pages to be shown in the form.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormData\PagesCollection $pages {
        set {
            $this->assigning('pages', $value);
            $this->pages = $value;
        }
    }
    /**
     * Indicates whether to mark the response as private.
     */
    public bool $private_;
    /**
     * If set to true then it shows the summary of all the selections made within the form.
     */
    public bool $showSummary;
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormSplash $splash;
    /**
     * Identifier for the starting page of the form. Must match one of the string identifiers for the configured pages.
     */
    public string $startPageIdentifier {
        set {
            $this->assigning('startPageIdentifier', $value);
            $this->startPageIdentifier = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'private' => is_bool($value) ? $this->private_ = $value : parent::assignMember($name, $value),
            'showSummary' => is_bool($value) ? $this->showSummary = $value : parent::assignMember($name, $value),
            'splash' => $value instanceof \stdClass ? $this->splash = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\FormSplash($value) : parent::assignMember($name, $value),
            'startPageIdentifier' => is_string($value) ? $this->startPageIdentifier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
