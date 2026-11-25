<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * FileContent
 *
 * The content object to build a message that will be sent.
 */
final class FileContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'filename',
    'mediaUrl',
];

    protected const array VALIDATION = [
    'filename' => [
        'minLength' => 0,
        'maxLength' => 25,
        'pattern' => '.*\\.(docx?|dotx?|xlsx?|f?ods|f?odt|rtf|odf|txt|info|pdf|xps|pdax|eps|csv|xlsm|xltx)$',
    ],
    'mediaUrl' => [
        'minLength' => 1,
        'pattern' => '',
    ],
];

    /**
     * Name of the file being sent (file extension included).
     */
    public string $filename {
        set {
            $this->assigning('filename', $value);
            $this->filename = $value;
        }
    }
    /**
     * URL of the file being sent. Must be a valid URL starting with https:// or http://. Supported file types are .doc, .docx, .rtf, .dot, .dotx, .odt ,.odf, .fodt, .txt, .info, .pdf, .xps, .pdax, .eps, .xls, .xlsx, .ods, .fods, .csv, .xlsm, .xltx. Maximum file size is 200 MB.
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
