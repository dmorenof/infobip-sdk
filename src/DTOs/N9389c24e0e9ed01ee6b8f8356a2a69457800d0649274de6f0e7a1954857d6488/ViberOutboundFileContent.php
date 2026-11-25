<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberOutboundFileContent
 */
final class ViberOutboundFileContent extends \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'fileName' => [
            'minLength' => 1,
            'pattern' => '.*\\.(docx?|dotx?|xlsx?|f?ods|f?odt|rtf|odf|txt|info|pdf|xps|pdax|eps|csv|xlsm|xltx)$',
        ],
        'mediaUrl' => [
            'minLength' => 1,
            'pattern' => '^(https?)://.*$',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Name of the file being sent (file extension included).
     */
    public string $fileName {
        set {
            $this->assigning('fileName', $value);
            $this->fileName = $value;
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
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'mediaUrl' => is_string($value) ? $this->mediaUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
