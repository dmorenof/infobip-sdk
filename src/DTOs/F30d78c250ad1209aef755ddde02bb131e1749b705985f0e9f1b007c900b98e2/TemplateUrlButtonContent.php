<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateUrlButtonContent
 */
final class TemplateUrlButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\CardAllowedTemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'parameter' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL extension of a `dynamic URL` defined in the registered template. Learn more about [URL buttons](https://www.infobip.com/docs/whatsapp/whatsapp-over-api#dynamic-template-button-urls-with-shortening-and-tracking).
     */
    public string $parameter {
        set {
            $this->assigning('parameter', $value);
            $this->parameter = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameter' => is_string($value) ? $this->parameter = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
