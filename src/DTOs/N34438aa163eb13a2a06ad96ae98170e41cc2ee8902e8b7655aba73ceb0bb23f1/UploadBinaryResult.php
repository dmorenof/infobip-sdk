<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * UploadBinaryResult
 */
final class UploadBinaryResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the uploaded content.
     * Example: "B44419205B27012D82F3BAD7B7EB37..."
     */
    public string $uploadedContentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'uploadedContentId' => is_string($value) ? $this->uploadedContentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
