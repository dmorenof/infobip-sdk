<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0;

/**
 * Base64EncodedFile
 */
final class Base64EncodedFile extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentType',
        'data',
        'fileName',
    ];

    protected const array VALIDATION = [
        'contentType' => [
            'minLength' => 1,
        ],
        'data' => [
            'minLength' => 1,
        ],
        'fileName' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Content type of the file.
     * Example: "application/pdf"
     */
    public string $contentType {
        set {
            $this->assigning('contentType', $value);
            $this->contentType = $value;
        }
    }
    /**
     * Base64 encoded file data.
     * Example: "base64encodeddata"
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * Name of the file.
     * Example: "attachment.pdf"
     */
    public string $fileName {
        set {
            $this->assigning('fileName', $value);
            $this->fileName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
