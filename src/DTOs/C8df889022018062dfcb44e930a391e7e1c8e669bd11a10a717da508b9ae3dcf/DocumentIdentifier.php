<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * DocumentIdentifier
 */
final class DocumentIdentifier extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the document.
     */
    public string $documentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentId' => is_string($value) ? $this->documentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
