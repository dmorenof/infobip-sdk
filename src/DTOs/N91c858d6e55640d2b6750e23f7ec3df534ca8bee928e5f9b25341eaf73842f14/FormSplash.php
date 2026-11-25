<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * FormSplash
 *
 * Shown at the start of the form.
 */
final class FormSplash extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buttonTitle' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
        'header' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
        'splashText' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
    ];

    /**
     * Text on the button shown on the page. If missing then this view doesn't display and continues onto the first module.
     */
    public string $buttonTitle {
        set {
            $this->assigning('buttonTitle', $value);
            $this->buttonTitle = $value;
        }
    }
    /**
     * If set, it displays in bold the title on the page underneath the image.
     */
    public string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
        }
    }
    /**
     * Identifier of the image to be shown at the top of the view.
     */
    public string $imageIdentifier;
    /**
     * If set, displays the body copy for the page.
     */
    public string $splashText {
        set {
            $this->assigning('splashText', $value);
            $this->splashText = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonTitle' => is_string($value) ? $this->buttonTitle = $value : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'imageIdentifier' => is_string($value) ? $this->imageIdentifier = $value : parent::assignMember($name, $value),
            'splashText' => is_string($value) ? $this->splashText = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
