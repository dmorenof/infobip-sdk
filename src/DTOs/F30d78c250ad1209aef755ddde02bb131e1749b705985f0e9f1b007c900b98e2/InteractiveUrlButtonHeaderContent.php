<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveUrlButtonHeaderContent
 *
 * Header of a message containing one or more [interactive elements](https://www.infobip.com/docs/whatsapp/message-types-and-templates/free-form-messages#available-interactive-formats).
 */
class InteractiveUrlButtonHeaderContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'DOCUMENT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonDocumentHeaderContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonImageHeaderContent',
    'TEXT' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonTextHeaderContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonVideoHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveUrlButtonDocumentHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonDocumentHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveUrlButtonImageHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonImageHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveUrlButtonTextHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonTextHeaderContent',
    'f30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2.InteractiveUrlButtonVideoHeaderContent' => 'InfobipSDK\\DTOs\\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\\InteractiveUrlButtonVideoHeaderContent',
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
