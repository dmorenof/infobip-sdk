<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateHeaderContent
 *
 * Template header. Should be defined, only if placeholders or media have been registered in the template's header.
 */
class TemplateHeaderContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'DOCUMENT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateDocumentHeaderContent',
    'GIF' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateGifHeaderContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateImageHeaderContent',
    'LOCATION' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateLocationHeaderContent',
    'TEXT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateTextHeaderContent',
    'TEXT_NAMED_PARAMETERS' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateTextNamedParametersHeaderContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateVideoHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateDocumentHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateDocumentHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateGifHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateGifHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateImageHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateImageHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateLocationHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateLocationHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateTextHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateTextHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateTextNamedParametersHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateTextNamedParametersHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.TemplateVideoHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\TemplateVideoHeaderContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
