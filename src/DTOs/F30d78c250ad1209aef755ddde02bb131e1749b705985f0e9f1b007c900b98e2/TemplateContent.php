<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateContent
 *
 * The content object to build a message that will be sent.
 */
final class TemplateContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'language',
        'templateData',
        'templateName',
    ];

    protected const array VALIDATION = [
        'language' => [
            'minLength' => 1,
        ],
        'templateName' => [
            'minLength' => 1,
            'maxLength' => 512,
            'pattern' => '[a-z0-9_]+$',
        ],
    ];

    /**
     * The code of language or locale to use. Must be the same code used when registering the template.
     */
    public string $language {
        set {
            $this->assigning('language', $value);
            $this->language = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateDataContent $templateData;
    /**
     * Template name. Should only contain lowercase alphanumeric characters and underscores.
     */
    public string $templateName {
        set {
            $this->assigning('templateName', $value);
            $this->templateName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'templateData' => $value instanceof \stdClass ? $this->templateData = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateDataContent($value) : parent::assignMember($name, $value),
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
