<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveButtonsDocumentHeaderContent
 */
final class InteractiveButtonsDocumentHeaderContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveButtonsHeaderContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'filename' => [
        'minLength' => 0,
        'maxLength' => 240,
    ],
    'mediaUrl' => [
        'minLength' => 1,
        'maxLength' => 2048,
        'pattern' => '(http|https)://(\\w+:?\\w*@)?(\\S+)(:[0-9]+)?(/|/([\\w#!:.?+=&%@!\\-/]))?',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Filename of the document.
     */
    public string $filename {
        set {
            $this->assigning('filename', $value);
            $this->filename = $value;
        }
    }
    /**
     * URL of a document sent in the header of a message containing one or more [interactive elements](https://www.infobip.com/docs/whatsapp/message-types-and-templates/free-form-messages#available-interactive-formats). Must be a valid URL starting with `https://` or `http://`. Supported document types are `PDF`, `TXT`, `XLS`, `XLSX`, `DOC`, `DOCX`, `PPT`, `PPTX`. Maximum document size is 100MB.
     */
    public string $mediaUrl {
        set {
            $this->assigning('mediaUrl', $value);
            $this->mediaUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
