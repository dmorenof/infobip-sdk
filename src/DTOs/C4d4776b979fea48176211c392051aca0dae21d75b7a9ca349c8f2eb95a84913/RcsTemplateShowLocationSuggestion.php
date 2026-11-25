<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateShowLocationSuggestion
 *
 * Opens the user's default map app and selects the agent-specified location.
 */
final class RcsTemplateShowLocationSuggestion extends \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateSuggestion
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'label' => [
        'minLength' => 1,
        'maxLength' => 100,
    ],
    'latitude' => [
        'schema' => true,
        'jsonSchema' => '{"type":"object","oneOf":[{"type":"number","format":"double","maximum":90,"minimum":-90},{"type":"string"}]}',
    ],
    'longitude' => [
        'schema' => true,
        'jsonSchema' => '{"type":"object","oneOf":[{"type":"number","format":"double","maximum":180,"minimum":-180},{"type":"string"}]}',
    ],
    'postbackData' => [
        'minLength' => 1,
        'maxLength' => 2048,
    ],
    'text' => [
        'minLength' => 1,
        'maxLength' => 25,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Label of the location.
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * Latitude of the location or {{placeholder}}.
     */
    public mixed $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Longitude of the location or {{placeholder}}.
     */
    public mixed $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }
    public string $postbackData {
        set {
            $this->assigning('postbackData', $value);
            $this->postbackData = $value;
        }
    }
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'postbackData' => is_string($value) ? $this->postbackData = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
