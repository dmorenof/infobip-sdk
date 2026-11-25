<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * UriImagemapAction
 */
final class UriImagemapAction extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ImagemapAction
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'linkUri' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Area $area;
    /**
     * URI opened when the imagemap area is tapped.
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
            'area' => $value instanceof \stdClass ? $this->area = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Area($value) : parent::assignMember($name, $value),
            'linkUri' => is_string($value) ? $this->linkUri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
