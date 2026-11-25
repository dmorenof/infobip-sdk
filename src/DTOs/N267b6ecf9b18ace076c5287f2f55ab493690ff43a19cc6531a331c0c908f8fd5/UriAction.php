<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * UriAction
 */
final class UriAction extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Action
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'label' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'uri' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\AltUri $altUri;
    /**
     * Label displayed on the action.
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * URI opened when the action is performed. Supported schemes are http, https, line and tel.
     */
    public string $uri {
        set {
            $this->assigning('uri', $value);
            $this->uri = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altUri' => $value instanceof \stdClass ? $this->altUri = new \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\AltUri($value) : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'uri' => is_string($value) ? $this->uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
