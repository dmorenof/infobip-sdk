<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ExternalLink
 *
 * External link shown after the video finishes playing.
 */
final class ExternalLink extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'label' => [
            'minLength' => 0,
            'maxLength' => 30,
        ],
        'linkUri' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
    ];

    /**
     * Label of the external link.
     * Example: "More info"
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * URI opened when the external link is tapped.
     * Example: "https://example.com"
     */
    public string $linkUri {
        set {
            $this->assigning('linkUri', $value);
            $this->linkUri = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'linkUri' => is_string($value) ? $this->linkUri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
